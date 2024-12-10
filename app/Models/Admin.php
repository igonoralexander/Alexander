<?php

namespace App\Models;

use App\Models\BlogPost;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'password', ];

    // Relationship with Posts
    public function blogposts()
    {
        return $this->hasMany(BlogPost::class, 'admin_id', 'id');
    }
}
