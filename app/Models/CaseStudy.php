<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;
use App\Models\Industry;

class CaseStudy extends Model
{
    use HasFactory;

    protected $table = 'case_studies';

    protected $fillable = [ 'client_name', 'slug', 'industry_id', 'problem', 'solution', 'results', 'logo',
                'content', 'created_at', 'updated_at', 'project_id'
    ];

    public function project() {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    // Relationship to the Industry model
    public function industry()
    {
        return $this->belongsTo(Industry::class, 'industry_id', 'id');
    }
}
