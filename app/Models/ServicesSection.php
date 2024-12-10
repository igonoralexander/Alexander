<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesSection extends Model
{
    use HasFactory;

    
    protected $table = 'services_sections';

    protected $fillable =
    [
        'title', 'description', 'image',
    ];
}
