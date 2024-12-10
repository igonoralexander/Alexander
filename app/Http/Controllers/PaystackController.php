<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paystack;
use Illuminate\Support\Facades\Http;


class PaystackController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        $request->validate([
            'payment_amount' => 'required',
            'email' => 'required|email',
        ]);

        $amount = $request->payment_amount * 100; // Convert amount to kobo (Paystack uses kobo)

       
            return Paystack::getAuthorizationUrl()->redirectNow();

    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // Handle the payment details from Paystack
        // You can update your database, send email notifications, etc.

        return view('payment.success', compact('paymentDetails'));
    }
}