<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'user_type', 'fname', 'lname', 'email', 'password','client_id','remember_token','email_verified_at', 'last_login', 'verified', 'contact', 'date_of_birth', 'review'
    ];

    // user type
    // 1 : Admin
    // 2 : Manager
    // 3 : Staff
    // 4 : Staff ( Packing )
    // 5 : Staff ( Driver )

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
