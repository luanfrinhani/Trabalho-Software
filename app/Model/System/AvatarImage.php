<?php

namespace App\Model\System;

use Illuminate\Database\Eloquent\Model;

class AvatarImage extends Model
{
    protected $fillable = [
        'user_id', 'file_id',
    ];

    /**
     * @return string
     */
    public static function path(): string
    {
        return '/avatar';
    }
}
