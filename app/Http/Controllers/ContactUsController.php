<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\SeoMeta;
use Mail;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //

    public function index()
    {

        $seometa = SeoMeta::where('page_name', 'Contact Us')->first();

        return view('frontend.pages.contact', [
            'seometa' => $seometa,
            'title' => 'Contact Us',
            'breadcrumbs' => [
                ['url' => '#', 'label' => 'Pages'],
                ['url' => null, 'label' => 'Get in Touch'],
            ],   
        ]);
    }

    public function contactIndex()
    {
        return view('backend.pages.contact');
    }
}
