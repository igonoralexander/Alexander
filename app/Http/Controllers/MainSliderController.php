<?php

namespace App\Http\Controllers;

use App\Models\MainSlider;
use App\Models\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class MainSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.landingpage.hero-section');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.main-slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'title'         => 'required|unique:main_sliders',
            'description'   => 'required',
            'image'         => 'required',
        ],
        [
                'title.required' => 'Enter title',
                'description.required' => 'Enter description',
                'image.required' => 'Upload image',
        ]);

            if (request()->hasFile('image'))
            {
                $extension = $request->file('image')->getClientOriginalExtension();
                $folder = 'main_slider';
            
                if( $extension == 'jpeg' || $extension == 'png' || $extension == 'jpg')
                {
                    $imageName = time(). "." . $extension;
                    $file = $request->file('image')->storeAs($folder, $imageName, 'public');

                    $mainslider = new MainSlider();
                
                    $mainslider->title         = $request ->title;
                    $mainslider->description   = $request ->description;
                    $mainslider->image       = 'storage/' . $file;
                    $mainslider-> save();

                }
            }
            return back ()->with('success', 'Data has been Saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(MainSlider $mainSlider)
    {
        //
        $mainSlider = MainSlider::find($mainSlider->id);
        return view('backend.main-slider.show', compact(['mainSlider']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainSlider $mainSlider)
    {
        //
        $mainSlider = MainSlider::find($mainSlider->id);
        return view('backend.main-slider.edit', compact(['mainSlider']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainSlider $mainSlider)
    {
        //
        $mainSlider = MainSlider::find($mainSlider->id);    
        
        if (request()->hasFile('image'))
        {
            $path = 'storage/main_slider/'.$mainSlider->image;

            if (File::exists($path))
            {
                File::delete($path);
            }

            $extension = $request->file('image')->getClientOriginalExtension();
            $folder = 'main_slider';
            $imageName = time(). "." . $extension;

            $file = $request->file('image')->storeAs($folder, $imageName, 'public');
            $mainSlider->image             = 'storage/' . $file;
        }
            $mainSlider->title             = $request ->title;
            $mainSlider->description       = $request ->description;
            $mainSlider -> update();

        return back()->with ('success', 'Slider info updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainSlider $mainSlider)
    {
        //
        $mainSlider = MainSlider::find($mainSlider->id);
        $path = 'storage/main_slider/'.$mainSlider->image;

        if (File::exists($path))
        {
            File::delete($path);
        }
        $mainSlider->delete();

        return back()->with('success', 'Deleted!');
    }
}
