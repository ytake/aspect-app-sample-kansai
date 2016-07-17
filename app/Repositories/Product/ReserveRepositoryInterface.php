<?php

namespace App\Repositories\Product;

/**
 * Interface ReserveRepositoryInterface
 */
interface ReserveRepositoryInterface
{
    /**
     * @return int
     */
    public function getQuantity() : int;

    public function createReserve();
}
