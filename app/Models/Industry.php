<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FAQ;
use App\Models\CaseStudy;
use App\Models\Testimonial;

class Industry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'content', 'icon', 'description', 'updated_at'
    ];

    public function caseStudies()
    {
        return $this->hasMany(CaseStudy::class, 'industry_id', 'id');
    }

    public function faqs()
    {
        return $this->hasMany(FAQ::class, 'industry_id', 'id');
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class, 'industry_id', 'id');
    }
}
