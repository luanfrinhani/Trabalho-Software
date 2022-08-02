<?php

namespace App\Service\System;

use App\DataManager\System\MaterialDataManager;
use App\Model\Core\Message;
use App\Model\System\Material;
use App\Service\Base\Service;
use Illuminate\Support\Facades\DB;

class MaterialService extends Service
{
    public function __construct(Material $model, MaterialDataManager $dataManager)
    {
        parent::__construct($model, $dataManager);
        $this->dataManager = $dataManager;
    }

    public function create(array $data): Message
    {
        $message = $this->validate($data);
        if ($message->isError()) {
            return $message;
        }
        $data['price'] = str_replace(',', '.', $data['price']);

        DB::beginTransaction();
        $message = parent::create($data);
        if ($message->isError()) {
            DB::rollBack();
            return $message;
        }
        DB::commit();

        return $message;
    }

    public function getPrice(string $material_id, int $amount): float|int
    {
        $message = $this->dataManager->getPrice($material_id);
        $materialPrice = $message->getData();

        return $materialPrice * $amount;
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
