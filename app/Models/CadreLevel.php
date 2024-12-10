<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadreLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'cadre_level', 'qualifications', 'skills',
        'physical_abilities', 'monthly_remuneration',
        'annual_remuneration', 'benefits',
    ];
}
