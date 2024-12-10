<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $table = 'project_categories';

    protected $fillable = [ 'name', 'slug', ];

    public function projects()
    {
        return $this->hasMany(Project::class,  'category_id', 'id');
    }
}
