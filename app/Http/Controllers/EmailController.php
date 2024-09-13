<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create()
    {
       
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject'=> 'required',
            'content'=> 'required',
        ]);

        $data = [
            'name' => $request -> name,
            'email' => $request-> email,
            'subject'=> $request-> subject,
            'content'=> $request-> content
        ];
        Mail::send('email-template', $data, function($message) use ($data)
        {
            $message->to('igonoralexander@gmail.com')
            // $message->to($data['email'])
            ->subject($data['subject']);
        });
        
        return back()->with(['message' => 'Message sent!']);
    }
}