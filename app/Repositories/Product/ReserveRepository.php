<?php

namespace App\Repositories\Product;

/**
 * Class ReserveRepository
 */
class ReserveRepository implements ReserveRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return int
     */
    public function quantity(int $id) : int
    {
        return 0;
    }

    /**
     * 予約データ登録
     *
     * @return bool
     */
    public function createReserve() : bool
    {
        return true;
    }
}
