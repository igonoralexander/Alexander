<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowWeWorkPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_title', 'content', 'meta_title', 'meta_description',
    ];
}
