<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\RegisterUser;

class Profile extends Model
{
    use HasFactory;


    protected $table = 'profiles';

    protected $fillable =
    [
        'register_user_id',
        'fullname',
        'mobileno',
        'email',
        'username',
        'gender',
        'dob',
        'address',
        'state',
        'city',
        'country',
        
    ];

    public function register_users(): BelongsTo
    {
        return $this->belongsTo(RegisterUser::class, 'register_user_id', 'id');
    }
}
