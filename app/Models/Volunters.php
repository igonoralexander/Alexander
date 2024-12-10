<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunters extends Model
{
    use HasFactory;

    protected $table = 'volunters';

    protected $fillable =
    [
        'title',
        'goal',
        'description',
    ];
}
