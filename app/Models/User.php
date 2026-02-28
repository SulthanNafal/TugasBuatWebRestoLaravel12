<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
     protected $table = 'admin'; // kalau tabel Anda bernama admin

    protected $fillable = [
        'Username',
        'Nama',
        'Email',
        'password',
        'Level'
    ];

    protected $hidden = [
        'password',
    ];
}