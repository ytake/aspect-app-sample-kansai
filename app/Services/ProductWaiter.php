<?php

namespace App\Services;

use App\Repositories\CancelRepositoryInterface;

/**
 * Class ProductWaiter
 */
class ProductWaiter
{
    /** @var CancelRepositoryInterface  */
    protected $repository;

    /**
     * ProductWaiter constructor.
     * @param CancelRepositoryInterface $repository
     */
    public function __construct(CancelRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     *
     */
    public function append()
    {
        $this->repository->appendList(1);
    }
}
