<?php

namespace App\Repositories\Product;

/**
 * Interface ReserveRepositoryInterface
 */
interface ReserveRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return int
     */
    public function quantity(int $id) : int;

    /**
     * @return bool
     */
    public function createReserve() : bool;
}
