<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Industry;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industries = Industry::all();
        return view('backend.industries.index', compact(['industries']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.industries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:industries,name,',
            'content' => 'nullable|min:5|string',
            'icon' => 'nullable|string',
            'description' => 'nullable|string',
            ],
        [
            'name.required' => 'Enter a name for the industry.',
            'name.unique' => 'An industry with this name already exists.',
    ]);
        
        Industry::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'content' => $request->content,
            'icon' => $request->icon,
            'description' => $request->description,
        ]);        

        return redirect()->route('admin.industry.index')->with('message', 'Content saved successfully!');
    }

    public function edit(string $id)
    {
        $industry = Industry::findOrFail($id);
        return view('backend.industries.edit', compact('industry'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'nullable|string|max:255|',
            'icon' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $industry = Industry::findOrFail($id);
        $industry->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'content' => $request->content,
            'icon' => $request->icon,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.industry.index')->with('message', 'Content saved successfully!');
    }

    public function destroy(string $id)
    {
            $industry = Industry::findOrFail($id);
            $industry->delete();
    
            return redirect()->route('admin.industry.index')->with('message', 'Content saved successfully!');
    }
}
