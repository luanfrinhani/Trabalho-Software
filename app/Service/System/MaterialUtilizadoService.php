<?php

namespace App\Service\System;

use App\DataManager\System\MaterialUtilizadoDataManager;
use App\Model\Core\Message;
use App\Model\System\MaterialUtilizado;
use App\Service\Base\Service;

class MaterialUtilizadoService extends Service
{
    public function __construct(MaterialUtilizado $materialUtilizado, MaterialUtilizadoDataManager $materialUtilizadoDataManager)
    {
        parent::__construct($materialUtilizado, $materialUtilizadoDataManager);
        $this->dataManager = $materialUtilizadoDataManager;
    }

    public function rules($id): array
    {
        return [
            // TODO: Implement rules() method.
        ];
    }

    public function messages(): array
    {
        return [
            // TODO: Implement messages() method.
        ];
    }
}
