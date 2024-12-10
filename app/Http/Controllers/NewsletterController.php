<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

use App\Models\Newsletter;
use App\Models\Admin;

class NewsletterController extends Controller
{
 
    //
    public function subscribe(Request $request)
    {

        try 
        {
            $request->validate([
                'email' => 'required|email|unique:newsletters,email',
            ]);

            Newsletter::create(['email' => $request->email]);

            return response()->json(['message' => 'Thank you for subscribing!'], 200);
    
        } catch (ValidationException $exception) {
            return response()->json(['message' => $exception->errors()['email'][0]], 422);
        }
    }
}
