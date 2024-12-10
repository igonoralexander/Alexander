<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


use App\Models\Profile;
use App\Models\RegisterUser;
use App\Models\Order;
use App\Models\OrderItem;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = array();
        if (session::has('loginId'))
        {
            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

            return view('profile.dashboard', compact('data'));

        }

        else

        {
            return redirect('/login.php');
        }
    }

    public function myorders()
    {

        $data = array();
        if (session::has('loginId'))
        {
            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

            $myorders = Order::where('id', '=', session::get('loginId'))->get();
            return view('profile.myorders', compact(['data', 'myorders']));

        }

        else

        {
            return redirect('/login.php');
        }
    }

    public function vieworders($id)
    {

        $data = array();
        if (session::has('loginId'))
        {
            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();

            $myorders = Order::where('id', $id)->where('user_id', session::get('loginId'))->first();

            $total = OrderItem::where('order_id', $id)->count();

            return view('profile.vieworders', compact(['data', 'myorders', 'total']));

           
        }

        else

        {
            return redirect('/login.php');
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        if (session::has('loginId'))
        {
            $data = RegisterUser::where('id', '=', session::get('loginId'))->first();
            return view('profile.comprof', compact('data'));
        }
        else
        {
            return redirect('/login.php');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // $request-> validate([
        //     'fullname'     => 'required',   
        //     'nobileno'     => 'required',
        //     'email'     => 'required',
        //     'username'   =>  'required',
        //     'gender'   =>  'required',
        //     'dob'   =>  'required',
        //     'address'   =>  'required',
        //     'state'   =>  'required',
        //     'city'   =>  'required',
        //     'country'   =>  'required'

        //     ]);


            $profile = new Profile ();
        
            $profile->register_user_id       = $request ->register_user_id;
            $profile->fullname      = $request ->fullname;
            $profile->mobileno      = $request ->mobileno;
            $profile ->email        = $request ->email;
            $profile->username      = $request ->username;
            $profile->gender        = $request ->gender;
            $profile->dob           = $request ->dob;
            $profile->address       = $request ->address;
            $profile->state         = $request ->state;
            $profile->city          = $request ->city;
            $profile->country       = $request ->country;
            
            $profile -> save();

            return back()->with ('status', 'Profile saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
