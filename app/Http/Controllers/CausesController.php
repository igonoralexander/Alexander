<?php

namespace App\Http\Controllers;

use App\Models\MainSlider;
use App\Models\Causes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CausesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $causes = Causes::All();
        return view('backend.causes.index', compact(['causes']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.causes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request-> validate([
            'title'         => 'required|unique:causes',
            'description'   => 'required',
            'goal'          => 'required',
            'image'         => 'required',
        ],
        [
                'title.required' => 'Enter title for Slider',
                'description.required' => 'Enter description',
                'goal.required' => 'Enter goal of cause',
                'image.required' => 'Upload image',
        ]);


            if (request()->hasFile('image'))
            {
                $extension = $request->file('image')->getClientOriginalExtension();
                $folder = 'causes';
            
                if( $extension == 'jpeg' || $extension == 'png' || $extension == 'jpg')
                {
                $imageName = time(). "." . $extension;
                $file = $request->file('image')->storeAs($folder, $imageName, 'public');

                $causes = new Causes ();
            
                $causes->title         = $request ->title;
                $causes->description   = $request ->description;
                $causes ->goal         = $request ->goal;
                $causes->image         = 'storage/' . $file;
                $causes -> save();

                }
            }
            return back ()->with('success', 'Data has been Saved successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Causes $causes)
    {
        //
        $causes = Causes::find($causes->id);
        return view('backend.causes.show', compact(['causes']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Causes $causes)
    {
        //
        $causes = Causes::find($causes->id);
        return view('backend.causes.edit', compact(['causes']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Causes $causes)
    {
        //
        $causes = Causes::find($causes->id);    
        
         if (request()->hasFile('image'))
         {
             $path = 'storage/causes/'.$causes->image;
 
             if (File::exists($path))
             {
                 File::delete($path);
             }
 
             $extension = $request->file('image')->getClientOriginalExtension();
             $folder = 'causes';
             $imageName = time(). "." . $extension;
 
             $file = $request->file('image')->storeAs($folder, $imageName, 'public');
             $causes->image             = 'storage/' . $file;
         }
            $causes->title         = $request ->title;
            $causes->description   = $request ->description;
            $causes ->goal         = $request ->goal;

            $causes -> update();
 
         return back()->with ('success', 'Info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Causes $causes)
    {
        //
        $causes = Causes::find($causes->id);
        $path = 'storage/causes/'.$causes->image;

        if (File::exists($path))
        {
            File::delete($path);
        }
        $causes->delete();

        return back()->with('success', 'Deleted!');
    }
}
