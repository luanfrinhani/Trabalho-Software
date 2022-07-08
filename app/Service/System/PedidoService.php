<?php

namespace App\Service\System;

use App\DataManager\System\PedidoDataManager;
use App\Model\System\Pedido;
use App\Service\Base\Service;

class PedidoService extends Service
{
    public function __construct(Pedido $pedido, PedidoDataManager $dataManager)
    {
        parent::__construct($pedido, $dataManager);
    }

    public function rules($id): array
    {
        // TODO: Implement rules() method.
    }

    public function messages(): array
    {
        // TODO: Implement messages() method.
    }
}
