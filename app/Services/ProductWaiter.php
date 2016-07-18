<?php

namespace App\Services;

use App\Repositories\CancelRepositoryInterface;

/**
 * Class ProductWaiter
 */
class ProductWaiter
{
    /** @var CancelRepositoryInterface */
    protected $repository;

    /**
     * ProductWaiter constructor.
     *
     * @param CancelRepositoryInterface $repository
     */
    public function __construct(CancelRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function append(int $id) : bool
    {
        return $this->repository->appendList($id);
    }
}
