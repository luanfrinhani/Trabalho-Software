<?php

namespace App\Service\Base;

/**
 * Interface ServiceInterface
 * @package App\Service\Base
 * @author Filipe Fico
 */
interface ServiceInterface
{
    /**
     * @param array $columns
     * @return mixed
     */
    public function all(array $columns = ['*']);

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, array $columns = ['*']);

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     * @param array $columns
     * @return mixed
     */
    public function findBy(
        array $criteria = [],
        array $orderBy = null,
        $limit = null,
        $offset = null,
        array $columns = ['*']
    );

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     * @param array $columns
     * @return mixed
     */
    public function findOneBy(
        array $criteria = [],
        array $orderBy = null,
        $offset = null,
        array $columns = ['*']
    );

    /**
     * @param array $searchCriteria
     * @param array $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     * @param array $columns
     * @return mixed
     */
    public function searchBy(
        array $searchCriteria = [],
        array $criteria = [],
        array $orderBy = null,
        $limit = null,
        $offset = null,
        array $columns = ['*']
    );

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @return mixed
     */
    public function guard();

    /**
     * @param array $data
     * @param null $id
     * @return mixed
     */
    public function validate(array $data, $id = null);

    /**
     * @param array $relations
     * return Service
     */
    public function with(array $relations);

    /**
     * return void
     */
    public function clearWith();

    /**
     * @param $id
     * @return array
     */
    public function rules($id): array;

    /** @return array */
    public function messages(): array;
}
