<?php

namespace App\Model\System;

use App\Traits\Core\Uuid;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use Uuid;

    protected $fillable = [
        'description', 'price', 'delivery_date', 'status', 'client_id'
    ];
}
