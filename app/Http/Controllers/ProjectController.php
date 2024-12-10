<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Admin;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.projects.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([ 'name' => 'required|min:5', ],
        [
                'name' => 'Enter name for project category',
        ]);

        ProjectCategory::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
        ]);

        return back()->with('message', 'Saved successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $projects = Project::with(['admin', 'projectcategory'])->get();
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
    public function destroy(string $id)
    {
        //
    }

    public function projectssectionIndex()
    {
        return view('backend.projects.index');
    }
}
