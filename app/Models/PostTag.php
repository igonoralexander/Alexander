<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\BlogPost;

class PostTag extends Model
{
    use HasFactory;

    protected $fillable = ['blog_post_id', 'tag_id'];
}
