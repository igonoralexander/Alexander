<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Mail;

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
             'phone' => 'required',
             'subject' => 'required',
             'content' => 'required',
             'terms_agreement' => 'accepted',
         ]);
     
         $thankyou_name = $request->name;
         $seometa = SeoMeta::where('page_name', 'Thank You')->first();

         // Prepare the data for email and database
         $data = [
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone,
             'subject' => $request->subject,
             'content' => $request->content,
         ];
     
        //  try {

             Mail::send('emails.contact', $data, function ($message) use ($data) {
                 $message->to('contact@igsoftware.com.ng')
                     ->subject($data['subject']);
             });

            // If email sent successfully, store in the database

            // Save data to the database
            Contact::create($data);
            
            return view('frontend.pages.thankyou' , compact('thankyou_name', 'seometa'));
        
        //  } catch (\Exception $e) {
        //      // Handle email delivery failure
        //      return back()->withErrors(['email' => 'Failed to send message. Please try again later.']);
        //  }
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