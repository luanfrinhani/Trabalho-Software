<?php

namespace App\DataManager\System;

use App\DataManager\Base\DataManager;
use App\Model\System\MaterialUtilizado;

class MaterialUtilizadoDataManager extends DataManager
{
     public function __construct(MaterialUtilizado $materialUtilizado)
     {
         parent::__construct($materialUtilizado);
     }
}
