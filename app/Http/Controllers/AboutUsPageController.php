<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AboutUs;
use App\Models\SeoMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class AboutUsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        $seometa = SeoMeta::where('page_name', 'About Us')->first();
        $about = AboutUs::first();

        return view('frontend.pages.about', [
            
            'seometa' => $seometa,
            'about' => $about,
            'title' => 'About Me',
            'breadcrumbs' => [
                ['url' => null, 'label' => 'About'],
            ],
        ]);
    }

    public function aboutSectionIndex()
    {
        return view('backend.landingpage.about-section');
    }

    public function aboutPageIndex()
    {
        $aboutus = AboutUs::all();
        return view('backend.about-us.index', compact(['aboutus']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return view('backend.about-us.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'main_title' => 'required|string|max:255|unique:about_us,main_title,',
            'who_we_are' => 'required|min:5|string',
            'founder' => 'nullable|string',
        ]);
        

        AboutUs::create([
            'main_title' => $request->main_title,
            'who_we_are' => $request->who_we_are,
            'founder' => $request->founder,
        ]);        

        return redirect()->route('admin.about-us')->with('message', 'Content saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aboutus = AboutUs::findOrFail($id);
        return view('backend.about-us.edit', compact('aboutus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'main_title' => 'nullable|string|max:255|',
            'who_we_are' => 'nullable|min:5|string',
            'founder' => 'nullable|string',
        ]);

        $aboutus = AboutUs::findOrFail($id);
        $aboutus->update([
            'main_title' => $request->main_title,
            'who_we_are' => $request->who_we_are,
            'founder' => $request->founder,
        ]);

        return redirect()->route('admin.about-us')->with('message', 'Content saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aboutus = AboutUs::findOrFail($id);
        $aboutus->delete();
    
        return redirect()->route('admin.about-us')->with('message', 'Content saved successfully!');
    }
}