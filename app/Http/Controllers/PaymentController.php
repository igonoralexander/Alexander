<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paystack;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

class PaymentController extends Controller
{
    private $apiContext;

    public function __construct()
    {
        // PayPal API context setup
        $paypalConf = \Config::get('paypal');
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );
        $this->apiContext->setConfig($paypalConf['settings']);
    }

    public function showPaymentForm()
    {
        return view('payment.form');
    }

    public function handlePayment(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'amount' => 'required|integer',
            'payment_method' => 'required|string|in:paystack,paypal',
        ]);

        if ($request->payment_method === 'paystack') {
            return $this->payWithPaystack($request);
        } elseif ($request->payment_method === 'paypal') {
            return $this->payWithPayPal($request);
        }

        return back()->withError('Invalid payment method selected.');
    }

    protected function payWithPaystack(Request $request)
    {
        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return back()->withError('The Paystack token has expired. Please refresh the page and try again.');
        }
    }

    public function handlePaystackCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        // Implement your logic to process the payment details
        return view('payment.success', compact('paymentDetails'));
    }

    protected function payWithPayPal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal($request->amount);
        $amount->setCurrency('USD');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Your transaction description');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('paypal.status'))
            ->setCancelUrl(route('paypal.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setTransactions([$transaction])
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->apiContext);
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            return back()->withError('Some error occurred, please try again.');
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirectUrl = $link->getHref();
                break;
            }
        }

        session()->put('paypal_payment_id', $payment->getId());

        if (isset($redirectUrl)) {
            return redirect()->away($redirectUrl);
        }

        return back()->withError('Unknown error occurred');
    }

    public function handlePayPalStatus()
    {
        $paymentId = session()->get('paypal_payment_id');

        if (empty(request('PayerID')) || empty(request('token'))) {
            return redirect('/')->withError('Payment failed');
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId(request('PayerID'));

        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() == 'approved') {
            // Payment success
            return redirect('/')->withSuccess('Payment success');
        }

        return redirect('/')->withError('Payment failed');
    }
}
