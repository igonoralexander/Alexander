<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\BlogPost;
use App\Models\SubCategory;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // Relationship with Posts
    public function blogposts()
    {
        return $this->hasMany(BlogPost::class,  'category_id', 'id');
    }

}
