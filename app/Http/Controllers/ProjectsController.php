<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::latest()->paginate(6);
        return view('welcome', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'title'      => 'required',   
            'link'              => 'required',
            'image'             => 'required',
            ]);

        if (request()->hasFile('image'))
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $folder = 'project_img';
            
            if( $extension == 'jpeg' || $extension == 'JPG' || $extension == 'png' || $extension == 'PNG' ||  $extension == 'jpg')
            {
                $imageName = time() . "." . $extension;
                $file = $request->file('image')->storeAs($folder, $imageName, 'public');

                $project = new Projects();
            
                $project ->title    = $request ->title;
                $project->link             = $request ->link;
                $project->image            = 'storage/' . $file;
                
                $project -> save();

                return back()->with(['message' => 'Project added Successfully!']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
        //
    }
}
