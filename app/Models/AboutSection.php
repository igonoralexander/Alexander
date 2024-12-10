<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $table = 'about_sections';

    protected $fillable =
    [
        'small_title', 'big_title', 'description', 'image',
    ];
}
