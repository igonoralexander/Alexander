<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

use App\Models\BlogCategory;
use App\Models\BlogMedia;
use App\Models\Admin;
use App\Models\Tag;
use App\Models\SubCategory;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'content', 'cover_image', 'category_id', 'admin_id', 'updated_at'
    ];

    protected static function booted()
    {
        static::created(function ($blogpost) {
            Artisan::call('sitemap:generate');
        });

        static::updated(function ($blogpost) {
            Artisan::call('sitemap:generate');
        });
    }
    
    // Relationship with Category
    public function blogcategory()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }
  
    // Relationship with Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function blogmedia()
    {
        return $this->hasMany(BlogMedia::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'blog_post_id', 'tag_id');
    }

    // Method for related posts by tags
    public function relatedPostsByTags()
    {
        return BlogPost::whereHas('tags', function ($query) {
            $query->whereIn('tags.id', $this->tags->pluck('id'));
        })
        ->where('id', '!=', $this->id) // Exclude the current post
        ->take(5) // Limit to 5 posts
        ->get();
    }

}   
