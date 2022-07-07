<?php

namespace App\Service\System;

use App\DataManager\System\MaterialDataManager;
use App\Model\System\Material;
use App\Service\Base\Service;

class MaterialService extends Service
{
    public function __construct(Material $model, MaterialDataManager $dataManager)
    {
        parent::__construct($model, $dataManager);
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