<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogMedia extends Model
{
    use HasFactory;

    protected $fillable = ['file_path', 'type', 'blog_posts_id'];

    // Relationship to Post
    public function blogposts()
    {
        return $this->belongsTo(BlogPost::class);
    }
}
