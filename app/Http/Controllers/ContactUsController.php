<?php

namespace App\Http\Controllers;

use App\Models\SeoMeta;

class ContactUsController extends Controller
{
    //

    public function index()
    {

        $seometa = SeoMeta::where('page_name', 'Contact Us')->first();

        return view('frontend.pages.contact', [
            'seometa' => $seometa,
            'title' => "Let's Connect",
            'breadcrumbs' => [
                ['url' => null, 'label' => 'Get in Touch'],
            ],   
        ]);
    }

    public function contactIndex()
    {
        return view('backend.pages.contact');
    }
}
