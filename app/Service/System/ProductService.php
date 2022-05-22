<?php

namespace App\Service\System;

use App\DataManager\System\ProductDataManager;
use App\Product;
use App\Service\Base\Service;

class ProductService extends Service
{
    public function __construct(Product $product, ProductDataManager $dataManager)
    {
        parent::__construct($product, $dataManager);
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
