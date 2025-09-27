<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // fillable fields for mass assignment
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // hidden attributes for arrays
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // casts
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}