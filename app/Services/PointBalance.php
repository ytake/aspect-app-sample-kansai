<?php

namespace App\Services;

use App\Repositories\PointRepositoryInterface;

/**
 * Class PointBalance
 */
class PointBalance
{
    /** @var PointRepositoryInterface  */
    protected $repository;

    /**
     * PointBalance constructor.
     *
     * @param PointRepositoryInterface $repository
     */
    public function __construct(PointRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function balance(int $id)
    {
        return $this->repository->hasBalance($id);
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function purchase(int $id)
    {
        return $this->repository->point($id);
    }

    /**
     * @param int $point
     *
     * @return bool
     */
    public function point(int $point)
    {
        return $this->repository->appendPoint($point);
    }
}
