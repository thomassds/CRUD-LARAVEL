<?php

namespace App\Yahp\Services;

use App\Yahp\Repositories\ExampleRepository;
use App\Yahp\Contracts\ServiceContract;

class ExampleService implements ServiceContract
{
     /**
     * @var ExampleRepository
     */
    private $repository;
     /**
     * @var ExampleService
     */
    private $exampleService;

    /**
     * Example Service constructor.
     * @param ExampleRepository $exampleRepository
     */
    public function __construct(ExampleRepository $exampleRepository)
    {
        $this->repository = $exampleRepository;
    }

    /**
     * @return mixed
     */
    public function renderList()
    {
        return $this->repository->getAll();
    }
    
    /**
     * @param $id
     * @return mixed
     */
    public function renderEdit($id)
    {
        return $this->repository->getById($id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function buildUpdate($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function buildInsert($data)
    {
        return $this->repository->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function buildDelete($id)
    {
        return $this->repository->delete($id);
    }
}
