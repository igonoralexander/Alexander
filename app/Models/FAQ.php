<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Industry;

class FAQ extends Model
{
    use HasFactory;

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
}
