<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'small_title', 'big_title', 'description',
        'youtube_link', 'email', 'phone', 'address', 'instagram_link',
        'image_path', 'facebook_link', 'twitter_link',
    ];
}
