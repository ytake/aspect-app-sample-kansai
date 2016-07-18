<?php

namespace App\Services;

use App\Exceptions\NoStockException;
use App\Repositories\Product\ReserveRepositoryInterface;

/**
 * Class ProductReservation
 */
class ProductReservation
{
    /** @var ReserveRepositoryInterface */
    protected $repository;

    /**
     * ProductReservation constructor.
     *
     * @param ReserveRepositoryInterface $repository
     */
    public function __construct(ReserveRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * 予約可能数が0以上であれば予約する
     * そうでなければエラーをスロー
     *
     * @param int $id
     *
     * @return bool
     * @throws NoStockException
     */
    public function makeReservation(int $id)
    {
        if ($this->repository->quantity($id)) {
            return $this->repository->createReserve();
        }

        throw new NoStockException;
    }
}
