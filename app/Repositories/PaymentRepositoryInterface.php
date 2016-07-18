<?php

namespace App\Repositories;

/**
 * Interface PaymentRepositoryInterface
 */
interface PaymentRepositoryInterface
{
    /**
     * 支払い作成
     * @param int $id
     *
     * @return bool
     */
    public function createPurchase(int $id);
}
