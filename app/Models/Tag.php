<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\BlogPost;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function getType()
    {
        return 'url'; // Return a valid type for sitemap generation
    }
    
    public function blogposts()
    {
        return $this->belongsToMany(BlogPost::class, 'post_tags', 'blog_post_id', 'tag_id');
    }
}
