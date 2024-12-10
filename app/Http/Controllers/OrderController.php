<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Cart;
use App\Models\RegisterUser;
use App\Models\Product;
use App\Models\Category;
use App\Models\Profile;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    //

    public function orderHistory()
    {
        $orders = Order::All();
        return view('admin.viewallorders', compact('orders'));
    }

    
    public function deliveredorders()
    {
        $orders = Order::where('status', '1')->get();
        return view('admin.viewallorders', compact('orders'));
    }
    

    public function viewOrder()
    {
        $orders = Order::where('status', '0')->get();
        return view('admin.orderhistory', compact('orders'));
    }

    public function OrderDetails($id)
    {
        $myorders = Order::where('id', $id)->first();
        
        return view('admin.orderdetails', compact('myorders'));
    }

    public function updateorder(Request $request, $id)
    {
        $orders = Order::find($id);

        $orders->status = $request->input('order_status');

        $orders->update();

        return redirect('/orderhistory')->with('order', "Order Updated");
    }

    
    public function placeOrder(Request $request)
    {
        $data = array();

        if (session::has('loginId')) 
        {
            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

                $order = new Order ();
            
                $order ->user_id          = $request->session()->get('loginId');
                $order ->payment_method   = $request ->payment_method;
                $order->subtotal          = $request ->subtotal;
                $order->delivery_fee      = $request ->delivery_fee;
                $order->delivery_method   = $request ->delivery_method;
                $order->address_details   = $request ->address_details;
                $order->total_price       = $request ->total_price;
                $order->tracking_id       = rand(1111,9999);
                
                $order -> save();

                $order->id;

                $cartitems = Cart::Where('user_id', session::get('loginId'))->get();

                foreach($cartitems as $item)
                {
                    OrderItem::create([
                        'order_id'=> $order->id,
                        'prod_id' => $item->prod_id,
                        'qty'     => $item->prod_qty,
                        'price'   => $item->products->product_sellingprice,
                    ]);
                    $prod = Product::where('id', $item->prod_id)->first();
                    $prod->qty = $prod->qty - $item->prod_qty;
                    $prod->update();
                }

                Cart::Where('user_id', session::get('loginId'))->delete();
                return redirect('/')->with('order', "Order Placed");;
            
        }

    }

}