<?php

namespace App\DataManager\System;

use App\DataManager\Base\DataManager;
use App\Model\System\Pedido;

class PedidoDataManager extends DataManager
{
    public function __construct(Pedido $pedido)
    {
        return parent::__construct($pedido);
    }
}
