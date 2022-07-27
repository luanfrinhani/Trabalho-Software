<?php

namespace App\Model\System;

use App\Traits\Core\Uuid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property string id
 * @property string description
 * @property float price
 * @property Carbon delivery_date
 * @property string status
 * @property string user_id
 * @property string label
 * @property MaterialUtilizado materialUtilizado
 */
class Pedido extends Model
{
    use Uuid;

    protected $fillable = [
        'description', 'price', 'delivery_date', 'status', 'user_id'
    ];

    protected $appends = [
        'label'
    ];

    protected $with = [
        'materialUtilizado'
    ];

    public function getLabelAttribute()
    {
        return $this->label = trans('pedido.label.' . $this->status);
    }

    public function materialUtilizado(): HasOne
    {
        return $this->hasOne(MaterialUtilizado::class);
    }
}
