<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Industry;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonials';

    protected $fillable =
    [
        'client_name',
        'content',
        'image',
    ];

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

}
