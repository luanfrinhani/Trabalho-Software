<?php

namespace App\DataManager\System;

use App\DataManager\Base\DataManager;
use App\Model\System\Product;

class ProductDataManager extends DataManager
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }
}
