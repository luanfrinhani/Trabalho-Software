<?php

namespace App\Model\System;

use App\Traits\Core\Uuid;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Uuid;

    protected $fillable = [
        'name', 'amount'
    ];
}
