<?php

namespace App\Http\Controllers;

use App\Models\Volunters;
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

class VoluntersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $volunters = Volunters::All();
        return view('backend.volunters.index', compact(['volunters']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.volunters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'name'         => 'required|unique:volunters',
            'title'   => 'required',
            'image'         => 'required',
        ],
        [
                'title.required' => 'Enter title',
                'name.required' => 'Enter Name',
                'image.required' => 'Upload image',
        ]);

            if (request()->hasFile('image'))
            {
                $extension = $request->file('image')->getClientOriginalExtension();
                $folder = 'volunters';
            
                if( $extension == 'jpeg' || $extension == 'png' || $extension == 'jpg')
                {
                $imageName = time(). "." . $extension;
                $file = $request->file('image')->storeAs($folder, $imageName, 'public');

                $volunters = new Volunters ();
            
                $volunters ->name    = $request ->name;
                $volunters ->title   = $request ->title;
                $volunters->image    = 'storage/' . $file;
                $volunters -> save();

                }
            }
            return back ()->with('success', 'Data has been Saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Volunters $volunters)
    {
            $volunters = Volunters::find($volunters->id);
            return view('backend.volunters.show', compact(['volunters']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunters $volunters)
    {
     
        $volunters = Volunters::find($volunters->id);
        return view('backend.volunters.edit', compact(['volunters']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Volunters $volunters)
    {
        $volunters = Volunters::find($volunters->id);    
        
        if (request()->hasFile('image'))
        {
            $path = 'storage/volunters/'.$volunters->image;

            if (File::exists($path))
            {
                File::delete($path);
            }

            $extension = $request->file('image')->getClientOriginalExtension();
            $folder = 'volunters';
            $imageName = time(). "." . $extension;

            $file = $request->file('image')->storeAs($folder, $imageName, 'public');
            $volunters->image             = 'storage/' . $file;
        }
            $volunters->name             = $request ->name;
            $volunters->title             = $request ->title;
            $volunters -> update();

        return back()->with ('success', 'Volunters info updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunters $volunters)
    {
        $volunters = Volunters::find($volunters->id);
        $path = 'storage/volunters/'.$volunters->image;

        if (File::exists($path))
        {
            File::delete($path);
        }
        $volunters->delete();

        return back()->with('success', 'Deleted!');
    }
}
