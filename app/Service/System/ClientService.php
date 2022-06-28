<?php

namespace App\Service\System;

use App\DataManager\System\ClientDataManager;
use App\Model\System\Client;
use App\Service\Base\Service;

class ClientService extends Service
{
    public function __construct(Client $model, ClientDataManager $dataManager)
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
