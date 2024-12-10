<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::All();
        return view('backend.gallery.index', compact(['gallery']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request-> validate([
            'image'         => 'required',
        ],
        [
                'image.required' => 'Upload image please',
        ]);


        if($request->has('images'))
        {
            foreach($request->file('images')as $image)
            {
                $extension = strtolower($image->getClientOriginalExtension());
                $folder = 'storage/gallery/';
                $imageName = md5(rand(1,1000)). "." . $extension;
                $url = $folder.$imageName;

                $image->move($folder, $imageName);

                Gallery::create([
                    'image' => $url,
                ]);
            }
        }
            return back ()->with('success', 'Data has been Saved successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
        $gallery = Gallery::find($gallery->id);
        return view('backend.gallery.show', compact(['gallery']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
        $gallery = Gallery::find($gallery->id);
        $path = 'storage/gallery/'.$gallery->image;

        if (File::exists($path))
        {
            File::delete($path);
        }
        $gallery->delete();

        return back()->with('success', 'Deleted!');
    }
}
