<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Tag;
use App\Models\BlogPost;
use App\Models\BlogCategory;


class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $blogposts = BlogPost::with(['admin', 'blogcategory'])->get();
        return view('backend.blog.index', compact('blogposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategories = BlogCategory::All();
        return view('backend.blog.create', compact('blogCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content'       => 'required|min:5',
            'category_id'   => 'required|exists:blog_categories,id',
            'title'         => 'required|max:255|unique:blog_posts,title',
            'cover_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:3072',
            'meta_title'    => 'nullable|max:255',
            'meta_keywords' => 'nullable|string|max:500',
            'meta_description' => 'nullable|string|max:500',
            'tags' => 'nullable|string', // Tags input as comma-separated
           
        ],
        [
                'category_id' => 'Select a Category for the blog post',
                'category_id.exists' => 'The selected category is invalid.',
                'title.required' => 'Enter a title for the blog post.',
                'title.unique' => 'A blog post with this title already exists.',
                'content.required' => 'Enter content for Blog posts',
                'cover_image.required' => 'Upload image (Preferably jpg, png)',
                'cover_image.image' => 'The uploaded file must be an image.',
                'cover_image.mimes' => 'The image must be a jpg, jpeg, or png file.',
        ]);

        if (request()->hasFile('cover_image'))
            {
            
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                $folder = 'blogs';
            
                if (in_array($extension, ['jpeg', 'png', 'jpg', 'webp'])) {
                    $imageName = time(). "." . $extension;
                    $file = $request->file('cover_image')->storeAs($folder, $imageName, 'public');

                    $blogpost = BlogPost::create([
                        'category_id' => $request->category_id,
                        'admin_id' => session()->get('AdmLogId'),
                        'title' => $request->title,
                        'slug' => \Str::slug($request->title),
                        'content' => $request->content,
                        'meta_title' => $request->meta_title,
                        'meta_keywords' => $request->meta_keywords,
                        'meta_description' => $request->meta_description,
                        'cover_image'      => 'storage/' . $file,
                    ]);

                     // Handle tags
                    if (!empty($request['tags'])) {
                        $tags = array_map('trim', explode(',', $request['tags'])); // Split and trim tags
                        $tagIds = [];

                        foreach ($tags as $tagName) {
                            $tag = Tag::firstOrCreate(['name' => $tagName]);
                            $tagIds[] = $tag->id;
                        }

                        $blogpost->tags()->sync($tagIds); // Attach tags to post
                    }

                }
            }
        
        return redirect()->route('admin.blog-posts')->with('message', 'Content saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogPost = BlogPost::with('admin')->findOrFail($id);
        return view('backend.blog.show', compact('blogPost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogPost = BlogPost::with('tags','blogcategory')->findOrFail($id);
        $blogCategories = BlogCategory::All();
        return view('backend.blog.edit', compact('blogPost', 'blogCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blogPost = BlogPost::findOrFail($id);  // Retrieve the blog post by ID or throw a 404 error.

        // Validate the input
        $request->validate([
            'content'       => 'required|min:5',
            'title'         => 'required|max:255|unique:blog_posts,title,' . $blogPost->id,
            'cover_image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
            'meta_title'    => 'nullable|max:255',
            'meta_keywords' => 'nullable|string|max:500',
            'meta_description' => 'nullable|string|max:500',
            'tags'          => 'nullable|string',
        ], [
            'category_id.required' => 'Select a category for the blog post.',
            'category_id.exists' => 'The selected category is invalid.',
            'title.required' => 'Enter a title for the blog post.',
            'content.required' => 'Enter content for the blog post.',
            'cover_image.image' => 'The uploaded file must be an image.',
            'cover_image.mimes' => 'The image must be a jpg, jpeg, or png file.',
        ]);

        // Handle cover image upload if present
        if ($request->hasFile('cover_image')) {
            $coverImagePath = $request->file('cover_image')->store('blogs', 'public');
            $blogPost->cover_image = 'storage/' . $coverImagePath;  // Update the cover image path.
        }

        // Update the blog post
        $blogPost->update([
            'category_id'      => $request->category_id,
            'title'            => $request->title,
            'admin_id' => session()->get('AdmLogId'),
            'slug'             => \Str::slug($request->title),
            'content'          => $request->content,
            'meta_title'       => $request->meta_title,
            'meta_keywords'    => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);

        // Handle tags
        if (!empty($request['tags'])) {
            $tags = array_map('trim', explode(',', $request['tags'])); // Split and trim tags
            $tagIds = [];

            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }

            $blogPost->tags()->sync($tagIds); // Attach updated tags
        } else {
            $blogPost->tags()->detach(); // Remove all tags if tags field is empty
        }

        // Redirect back to the blog list or show page
        return redirect()->route('admin.blog-posts')->with('message', 'Blog post updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}