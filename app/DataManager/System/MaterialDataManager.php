<?php

namespace App\DataManager\System;

use App\DataManager\Base\DataManager;
use App\Model\Core\Message;
use App\Model\System\Material;
use Illuminate\Support\Facades\DB;

class MaterialDataManager extends DataManager
{
     public function __construct(Material $material)
     {
         parent::__construct($material);
     }

    public function getPrice(string $materialId): Message
    {
        $query = DB::table('materials')
            ->selectRaw(
                'materials.price as price'
            )->where('materials.id', '=', $materialId);

        $material = $query->get()[0]->price;

        return $this->message->success(trans('system.messages.success'), $material);
    }
}
