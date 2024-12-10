<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Admin;
use App\Models\Contact;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        return view('backend.auth.login');
    }

    public function parallaxSection()
    {
        return view('backend.landingpage.parallax-section');
     
    }

    public function clients()
    {
        return view('backend.landingpage.clients');
    }

    public function techStacks()
    {
        return view('backend.landingpage.tech-stacks');
    }

    public function createWhyChooseUs()
    {
        return view('backend.landingpage.why-choose-us');
    }

    public function createCoreValues()
    {
        return view('backend.landingpage.core-values');
    }

    public function createCadreLevels()
    {
        return view('backend.pages.cadre-levels');
    }

    public function createHowWeWork()
    {
        return view('backend.landingpage.how-we-work');
    }

    public function viewContacts()
    {
        return view('backend.pages.contact-view');
    }

    public function changePassword()
    {
        return view('backend.pages.change-password');
    }
    
    public function dashboard()
    {
        $contacts = Contact::All();
        return view('backend.dashboard', compact('contacts'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'username'     => 'required|exists:admins,username',
            'password'  => 'required|min:6'
        ],
            [
                'username.required' => 'Enter username',
                'username.exists' => 'Username not found',
                'password.required' => 'Password is required',
                'password.min' => 'Password must be more that 6 characters'
            ]);

            $admin = Admin::where('username', '=', $request->username)->first();
            if ($admin)
            {
                if (Hash::check($request->password, $admin->password))
                    {
                        $request->session()->put('AdmLogId', $admin->id);
                        return redirect()->route('admin.dashboard')->with ('success', 'Login Successfull, Welcome');
                    }
                    else
                    { 
                        return back()->with ('fail', 'Username or Password is incorrect, try again');;           
                    }
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function logout()
    {
        if (session::has('AdmLogId'))
        {
            Session::pull('AdmLogId');
            return redirect()->route('admin.login');
        }
    }
}