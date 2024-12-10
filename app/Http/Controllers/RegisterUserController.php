<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


use App\Models\RegisterUser;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;


class RegisterUserController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function registration()
    {
        return view('pages.register');
    }    

    public function registeruser(Request $request)
    {
        $request-> validate([
            'fullname'  => 'required',
            'mobileno'  => 'required',
            'email'     => 'required|email|unique:register_users',
            'password'  => 'required|min:8'
            ]);

            $registeruser = new RegisterUser ();
            $registeruser-> fullname = $request->fullname;
            $registeruser-> mobileno = $request->mobileno;
            $registeruser-> email = $request->email;
            $registeruser-> password = Hash::make($request->password);

        $reg = $registeruser -> save();
        if ($reg)
        {

            return redirect('/login.php')->with('status', 'Registration Successfull, Please Login');
        } 
        else
        {

            return back ()->with('error', 'Registration Failed');           
        }

    }

    public function loginuser(Request $request)
    {
        $request-> validate([
            'email'     => 'required|email',
            'password'  => 'required|min:8'
            ]);

            $registeruser = RegisterUser::where('email', '=', $request->email)->first();
            if ($registeruser)
            {
                if (Hash::check($request->password, $registeruser->password))
                    {
                        $request->session()->put('loginId', $registeruser->id);
                        return redirect ('/user')->with('status', 'Login Successfull, Welcome');
                    }
                    else
                    {
                        return back()->with('error', 'Password is incorrect');           
                    }
            } 
            else

            {
                return back()->with('error', 'Email not found');           
            }
            
        }

        public function userdashboard()
        {
            $data = array();
            if (session::has('loginId'))
            {
                $data = RegisterUser::where('id', '=', session::get('loginId'))->first();
            }
                $trending_product = Product::Where('trending', '1')->take(15)->get();
                $slider = Slider::All();

                $prod = Product::orderBy('id', 'ASC')->paginate(10);
                $category = Category::All();
                return view('welcome', compact(['data', 'trending_product', 'category', 'prod', 'slider']));
        }

        public function logout()
        {
            if (session::has('loginId'))
            {
                Session::pull('loginId');
                return redirect ('/');
            }
            
        }

  

}