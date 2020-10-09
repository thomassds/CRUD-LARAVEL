<?php

namespace App\Yahp\Services;

use App\Yahp\Repositories\ProductRepository;
use App\Yahp\Contracts\ServiceContract;

class ProductService implements ServiceContract
{
     /**
     * @var ProductRepository
     */
    private $repository;
     /**
     * @var ProductService
     */
    private $productService;

    /**
     * Example Service constructor.
     * @param ProductService $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->repository = $productRepository;
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
