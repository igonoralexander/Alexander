<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Industry;
use App\Models\SeoMeta;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\Project;
use App\Models\RegisterUser;

class FrontEndController extends Controller
{

    public function getMostReadPosts()
    {
        return BlogPost::orderBy('views_count', 'desc')->take(5)->get(); // Top 5 most-read posts
    }


    public function industryDetail($slug)
    { 

        $industry = Industry::where('slug', $slug)->firstOrFail();
        $seometa = SeoMeta::where('page_name', 'Industries We Serve')->first();

        return view('frontend.industries.industries-detail', [

                    'seometa' => $seometa,
                    'industry' => $industry,
                    'title' => $industry->name,
                        'breadcrumbs' => [
                            ['url' => '/industries', 'label' => 'Industries We Serve'],
                            ['url' => null, 'label' => $industry->name],
                        ],   
                    ]);

    }

    public function blogDetail($slug)
    { 

        $blog = BlogPost::with(['admin', 'blogcategory'])
                    ->where('slug', $slug)->firstOrFail();

    
        $blog->increment('views_count');

        $relatedPosts = BlogPost::where('category_id', $blog->category_id)
        ->where('id', '!=', $blog->id) // Exclude the current post
        ->latest()->get();

        $seometa = SeoMeta::where('page_name', 'Blog')->first();

        return view('frontend.blog.blog-details', [
        
                    'seometa' => $seometa,
                    'blog' => $blog,
                    'relatedPosts' => $relatedPosts,
                    'title' => $blog->title,
                        'breadcrumbs' => [
                            ['url' => '/blog', 'label' => 'Blog'],
                            ['url' => null, 'label' => 'Latest Insights'],
                        ],   
                    ]);

    }

    public function projectDetail($slug)
    { 

        $project = Project::where('slug', $slug)->firstOrFail();

        $seometa = SeoMeta::where('page_name', 'Project')->first();

        return view('frontend.pages.project-details', [
        
                    'seometa' => $seometa,
                    'project' => $project,
                    'title' => $project->name,
                        'breadcrumbs' => [
                            ['url' => '/projects', 'label' => 'Projects'],
                        ],   
                    ]);

    }

}