<?php

namespace App\Model\System;

use App\Traits\Core\Uuid;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use Uuid;

    protected $fillable = [
        'name', 'personal_document', 'address', 'email', 'birth_date', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
