<?php

namespace App\DataManager\System;

use App\DataManager\Base\DataManager;
use App\Model\System\Client;

class ClientDataManager extends DataManager
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }
}
