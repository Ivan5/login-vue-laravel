<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    protected $guarded = [];
    protected $hidden = [
        'password', 'remember_token'
    ];
}
