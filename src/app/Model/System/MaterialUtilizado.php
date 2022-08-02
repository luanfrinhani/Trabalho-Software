<?php

namespace App\Model\System;

use App\Traits\Core\Uuid;
use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
/**
 * @property string id
 * @property string material_id
 * @property string pedido_id
 * @property BigInteger material_amount
 * @property BelongsTo material
 */
class MaterialUtilizado extends Model
{
    use Uuid;

    protected $fillable = [
        'material_id', 'pedido_id', 'material_amount'
    ];

    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class, 'material_id');
    }
}
