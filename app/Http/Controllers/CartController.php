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

class CartController extends Controller
{
    //

    public function addProdtoCart(Request $request)
    {
        $data = array();

        if (session::has('loginId')) 
        {
            $prod_id = $request->prod_id;

            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

            $prod_check = Product::where('id', $prod_id)->first();

            if($prod_check)
            {
               if (Cart::where('prod_id', $prod_id)->where('user_id', session::get('loginId'))->exists())
               {
                    return back()->with('status', $prod_check->product_name. " Already added to Cart");
               }
            
               else
                
               {
                    $cartitem = new Cart();

                    $cartitem->prod_id = $request->prod_id;
                    $cartitem->user_id = $request->session()->get('loginId');
                    $cartitem->prod_qty = $request->prod_qty;

                    $cartitem->save();

                    return back()->with ('cart', $prod_check->product_name);
                }
            }
        }

        else

        {
            return redirect('/login.php');
        }

    }

    public function updateCart(Request $request, Cart $cart)
    {
        $data = array();

        if (session::has('loginId')) 
        {

            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();
            
            $cart = Cart::find($cart->id);

            $cart->prod_id = $request->prod_id;
            $cart->user_id = $request->user_id;
            $cart->prod_qty = $request->prod_qty;

            $cart->update();

            return redirect('/viewcart')->with ('status', 'Cart Update Successfully!');
        }

        else
        {
            return redirect('/login.php');
        }
                   
    }

    
    static function CartItem()
    {
        
        $data = array();

        if (session::has('loginId')) 
        {
            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

            $userID = session::get('loginId');
            return Cart::where('user_id', $userID)->count();
        }
            
    }

    public function viewCart(Request $request)
    {
        $data = array();

        if (session::has('loginId'))
        {
            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

            $cart = Cart::Where('user_id', session::get('loginId'))->get();

            $allCart = Cart::Where('user_id', '=', session::get('loginId'))->first();

            $prof = Profile::Where('register_user_id', session::get('loginId'))->get();

            $category = Category::All();
    
            return view('pages.viewcart', compact(['data', 'category', 'prof', 'cart', 'allCart']));

        }

        else
        {
            return redirect('/login.php');
        }
    }


    public function removeItem(Cart $cart)
    {
        $cart = Cart::find($cart->id);

        $cart->delete();

        return redirect('/viewcart')->with ('status', 'Item Removed from Cart Successfully!');

    }

    public function checkOut(Request $request)
    {
        $data = array();

        if (session::has('loginId'))
        {
            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

            $old_cartitems = Cart::Where('user_id', session::get('loginId'))->get();

            foreach ($old_cartitems as $item)
            {
                if(!Product::where('id', $item->prod_id)->where('qty', '>=', $item->prod_qty)->exists())
                {
                    $removeItem = Cart::Where('user_id', session::get('loginId'))->where('prod_id', $item->prod_qty)->first();
                    // $removeItem->delete();
                }
            }

            $cartitems = Cart::Where('user_id', session::get('loginId'))->get();
            $prof = Profile::Where('register_user_id', session::get('loginId'))->get();
            $category = Category::All();
    
            return view('pages.checkout', compact(['data', 'category', 'prof', 'cartitems']));

        }

        else
        {
            return redirect('/login.php');
        }
    }

}