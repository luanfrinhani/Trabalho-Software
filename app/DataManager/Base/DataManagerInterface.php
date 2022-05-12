<?php

namespace App\DataManager\Base;

use App\Model\Core\Message;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface DataManagerInterface
 * @package App\DataManager\Base
 * @author Filipe Fico
 */
interface DataManagerInterface
{
    /**
     * @param array $columns
     * @return Message
     */
    public function all(array $columns = ['*']): Message;

    /**
     * @param $id
     * @param array $columns
     * @return Message
     */
    public function find($id, array $columns = ['*']): Message;

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     * @param array $columns
     * @return Message
     */
    public function findBy(
        array $criteria = [],
        array $orderBy = null,
        $limit = null,
        $offset = null,
        array $columns = ['*']
    ): Message;

    /**
     * @param array $searchCriteria
     * @param array $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     * @param array $columns
     * @return Message
     */
    public function searchBy(
        array $searchCriteria = [],
        array $criteria = [],
        array $orderBy = null,
        $limit = null,
        $offset = null,
        array $columns = ['*']
    ): Message;

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data): Message;

    /**
     * @param Model $model
     * @param array $data
     * @return Message
     */
    public function update(Model $model, array $data): Message;

    /**
     * @param Model $model
     * @return Message
     */
    public function delete(Model $model): Message;

    /**
     * @param $relations
     * @return DataManagerInterface
     */
    public function with($relations): DataManagerInterface;

    /**
     * @return Model
     */
    public function getModel(): Model;

    /**
     * @param Model $model
     */
    public function setModel(Model $model);
}
