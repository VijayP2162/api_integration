<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Registerload extends Authenticatable
{
    use Notifiable;

    protected $table = 'register_master';

    protected $fillable = [
        'full_name',
        'user_name',
        'PASSWORD',
        'mobile',
        'ROLE',
        'otp',
        'user_status',
    ];

    protected $hidden = [
        'PASSWORD',
        'remember_token',
    ];

    public function getAuthPasswordName()
    {
        return 'PASSWORD';
    }
}