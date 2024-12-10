<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CaseStudy;
use App\Models\ProjectCategory;


class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [ 'category_id', 'project_name', 'link', 'image', ];

    use HasFactory;

    public function caseStudy()
    {
        return $this->hasOne(CaseStudy::class);
    }

    // Relationship with Category
    public function projectcategory()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id', 'id');
    }

}
