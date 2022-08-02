<?php

namespace App\Service\System;

use App\DataManager\System\PedidoDataManager;
use App\Enum\PedidoStatusTypeEnum;
use App\Model\Core\Message;
use App\Model\System\Material;
use App\Model\System\Pedido;
use App\Service\Base\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PedidoService extends Service
{
    protected MaterialUtilizadoService $materialUtilizadoService;
    protected MaterialService $materialService;

    public function __construct(Pedido $pedido, PedidoDataManager $dataManager, MaterialUtilizadoService $materialUtilizadoService, MaterialService $materialService)
    {
        parent::__construct($pedido, $dataManager);
        $this->materialUtilizadoService = $materialUtilizadoService;
        $this->materialService = $materialService;
    }

    public function create(array $data): Message
    {
        $message = $this->validate($data);
        if ($message->isError()) {
            return $message;
        }
        $messageEstoque = $this->verificaEstoque($data);
        if ($messageEstoque->isError()) {
            return $messageEstoque;
        }
        /** @var Material $material */
        $material = $messageEstoque->getData();

        $data['status'] = PedidoStatusTypeEnum::CRIADO;
        $data['user_id'] = Auth::user()->id;
        $data['delivery_date'] = Carbon::createFromFormat('d/m/Y', $data['delivery_date']);

        DB::beginTransaction();
        $messagePedido = parent::create($data);
        if ($messagePedido->isError()) {
            DB::rollBack();
            return $messagePedido;
        }
        $amount['amount'] = $material->amount - $data['material_amount'];
        $messageMaterial = $this->materialService->update($amount, $material->id);
        if ($messageMaterial->isError()) {
            DB::rollBack();
            return $messageMaterial;
        }

        /** @var Pedido $pedido */
        $pedido = $messagePedido->getData();

        $data['pedido_id'] = $pedido->id;
        $message = $this->materialUtilizadoService->create($data);
        if ($message->isError()) {
            DB::rollBack();
            return $message;
        }

        DB::commit();

        return $messagePedido;
    }

    private function verificaEstoque(array $data): Message
    {
        $message = $this->materialService->find($data['material_id']);
        if ($message->isError()) {
            return $message;
        }
        /** @var Material $material */
        $material = $message->getData();

        if ($material->amount < $data['material_amount']) {
            return $this->message->error('Quantidade de material em estoque insuficiente', null, null);
        }

        return $this->message->success(trans('system.messages.success'), $material);
    }

    public function update(array $data, $id): Message
    {
        $message = parent::find($id);
        if ($message->isError()) {
            return $message;
        }
        DB::beginTransaction();
        /** @var Pedido $pedido */
        $pedido = $message->getData();
        $messageMaterial = $this->materialService->find($pedido->materialUtilizado->material_id);
        if ($messageMaterial->isError()) {
            return $messageMaterial;
        }
        /** @var Material $material */
        $material = $messageMaterial->getData();

        $data['delivery_date'] = Carbon::createFromFormat('d/m/Y', $data['delivery_date']);
        if ($data['material_amount'] != $pedido->materialUtilizado->material_amount) {
            $newAmount = $pedido->materialUtilizado->material_amount - $data['material_amount'];
            $amountMaterial = $material->amount + $newAmount;
            $newMaterial['amount'] = $amountMaterial;
            $message = $this->materialService->update($newMaterial, $material->id);
            if ($message->isError()) {
                DB::rollBack();
                return $message;
            }
        }

        $messagePedido = parent::update($data, $id);
        if ($messagePedido->isError()) {
            DB::rollBack();
            return $messagePedido;
        }
        /** @var Pedido $pedido */
        $pedido = $messagePedido->getData();
        $data['material_id'] = $material->id;
        $message = $this->materialUtilizadoService->update($data, $pedido->materialUtilizado->id);
        if ($message->isError()) {
            DB::rollBack();
            return $message;
        }

        DB::commit();

        return $messagePedido;
    }

    public function rules($id): array
    {
        return [];
    }

    public function messages(): array
    {
        return [];
    }
}
