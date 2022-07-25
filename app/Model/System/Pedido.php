<?php

namespace App\Model\System;

use App\Traits\Core\Uuid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
/**
 * @property string id
 * @property string description
 * @property float price
 * @property Carbon delivery_date
 * @property string status
 * @property string user_id
 * @property string label
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

    public function getLabelAttribute()
    {
        return $this->label = trans('pedido.label.' . $this->status);
    }
}
