<?php

namespace App\Model\System;

use App\Traits\Core\Uuid;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string id
 * @property string name
 * @property int amount
 * @property double price
 */
class Material extends Model
{
    use Uuid;

    protected $fillable = [
        'name', 'amount', 'price'
    ];
}
