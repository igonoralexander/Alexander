<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Contact;
use App\Models\SeoMeta;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    
     public function create(Request $request)
     {
         // Validate the input
         $request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'content' => 'required',
         ]);
         $subject = 'New Message';
         $thankyou_name = $request->name;
         $seometa = SeoMeta::where('page_name', 'Thank You')->first();

         // Prepare the data for email and database
         $data = [
             'name' => $request->name,
             'email' => $request->email,
             'content' => $request->content,
             
         ];
     
        //  try {
              Mail::send('emails.contact', $data, function ($message) use ($data, $subject) {
                 $message->to('igonoralexander@gmail.com')->subject($subject);
             });

            // If email sent successfully, store in the database

            // Save data to the database
            Contact::create($data);
            
            return view('frontend.pages.thankyou' , compact('thankyou_name', 'seometa'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}