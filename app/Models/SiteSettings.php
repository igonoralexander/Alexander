<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    use HasFactory;

    protected $table = 'site_settings';

    protected $fillable = [
        'id', // Include 'id' to allow mass assignment of this attribute
        'logo',
        'favicon',
        'breadcrumb_image',
        'about_section_image',
        'contact_section_image',
        'services_section_image',
        'projects_section_image',
        'testimonials_section_image',
        'site_title',
        'meta_description',
        'meta_keywords',
    ];
}