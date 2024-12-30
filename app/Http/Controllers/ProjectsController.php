<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
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
        $aprojects = Project::with(['projectcategory'])->get();
        return view('backend.projects.index', compact('aprojects'));
    }

    public function indexCategory()
    {
        return view('backend.projects.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $projectCategories = ProjectCategory::All();
        return view('backend.projects.create', compact('projectCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeCategory(Request $request)
     {
         //
         $request->validate([ 'name' => 'required|min:5', ],
         [
                 'name' => 'Enter name for project category',
         ]);
 
         ProjectCategory::create([
             'name' => $request->name,
             'slug' => \Illuminate\Support\Str::slug($request->name),
         ]);
 
         return back()->with('message', 'Saved successfully!');
 
     }

    public function store(Request $request)
    {
        $request-> validate([
            'category_id'   => 'required|exists:project_categories,id',
            'name'          => 'required',   
            'link'          => 'required',
            'image'         => 'required|image|mimes:jpg,jpeg,png,webp|max:3072',
            ]);

        if (request()->hasFile('image'))
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $folder = 'project_img';
            
            if (in_array($extension, ['jpeg', 'png', 'jpg', 'webp']))
            {
                $imageName = time() . "." . $extension;
                $file = $request->file('image')->storeAs($folder, $imageName, 'public');

                $project = new Project();
                $project->category_id = $request->category_id;
                $project->name        = $request ->name;
                $project->slug        = \Illuminate\Support\Str::slug($request->name);
                $project->content     = $request ->content;
                $project->link        = $request ->link;
                $project->image       = 'storage/' . $file;
                
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
    public function show($id)
    {
        //
        $project = Project::findOrFail($id);
        return view('backend.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::with('projectcategory')->findOrFail($id);
        $projectCategories = ProjectCategory::All();
        return view('backend.projects.edit', compact('project', 'projectCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $project = Project::findOrFail($id);  // Retrieve the blog post by ID or throw a 404 error.

        // Validate the input
        $request->validate([
            'link'       => 'required|min:5',
            'name'         => 'required|max:255|unique:projects,name,' . $project->id,
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
        ], [
            'category_id.required' => 'Select a category for the project.',
            'category_id.exists' => 'The selected category is invalid.',
            'name.required' => 'Enter a name for the project.',
            'link.required' => 'Enter link to project.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a jpg, jpeg, or png file.',
        ]);

        // Handle cover image upload if present
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('project_img', 'public');
            $project->image = 'storage/' . $imagePath;  // Update the cover image path.
        }

            $project->category_id = $request->category_id;
            $project->name        = $request ->name;
            $project->slug        = \Illuminate\Support\Str::slug($request->name);
            $project->content     = $request ->content;
            $project->link        = $request ->link;
                
            $project->update();

            // Redirect back to the blog list or show page
            return redirect()->route('admin.projects')->with('message', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
