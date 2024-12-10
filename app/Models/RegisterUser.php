<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Profile;

class RegisterUser extends Model
{
    protected $fillable =
    [
        'fullname',
        'mobileno',
        'username',
        'email',
        'password',
        
    ];
    use HasFactory;

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}