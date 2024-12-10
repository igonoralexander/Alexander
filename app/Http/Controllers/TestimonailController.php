<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Causes;
use App\Models\FAQ;
use App\Models\Testimonail;
use Illuminate\Support\Facades\Session;

class TestimonailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.landingpage.testimonial-section');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         //
         return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request-> validate([
            'name'  => 'required|unique:testimonails',
            'title'    => 'required',
            'testimonial'    => 'required',
        ],
        [
                'name.required' => 'Enter name',
                'title.required' => 'Enter title',
                'testimonial.required' => 'Enter testimonial',
        ]);

                $testimonial = new Testimonail ();
            
                $testimonial->name     = $request ->name;
                $testimonial->title     = $request ->title;
                $testimonial->testimonial       = $request ->testimonial;
                $testimonial -> save();

            return back ()->with('success', 'Data has been Saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonail $testimonial)
    {
        //
        $testimonial = Testimonail::find($testimonial->id);
        return view('backend.testimonial.show', compact(['testimonial']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonail $testimonial)
    {
        //
        $testimonial = Testimonail::find($testimonial->id);
        return view('backend.testimonial.edit', compact(['testimonial']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonail $testimonial)
    {
        //
        $testimonial = Testimonail::find($testimonial->id);    
        
        $testimonial->name    = $request ->name;
        $testimonial->title   = $request ->title;
        $testimonial->testimonial    = $request ->testimonial;
        
        $testimonial -> update();
 
         return back()->with ('success', 'Info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonail $testimonial)
    {
        //
        $testimonial = Testimonail::find($testimonial->id);

        if (File::exists($path))
        {
            File::delete($path);
        }
        $testimonial->delete();

        return back()->with('success', 'Deleted!');
    }
}
