<?php

namespace App\DataManager\System;

use App\DataManager\Base\DataManager;
use App\Model\System\Material;

class MaterialDataManager extends DataManager
{
     public function __construct(Material $material)
     {
         parent::__construct($material);
     }
}
