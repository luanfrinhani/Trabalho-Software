<?php

namespace App\Model\System;

use App\Traits\Core\Uuid;
use Illuminate\Database\Eloquent\Model;

class MaterialUtilizado extends Model
{
    use Uuid;

    protected $fillable = [
        'material_id', 'pedido_id', 'material_amount'
    ];
}
