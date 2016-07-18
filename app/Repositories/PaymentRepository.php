<?php

namespace App\Repositories;

/**
 * Class PaymentRepository
 */
class PaymentRepository implements PaymentRepositoryInterface
{
    /**
     * 支払い作成
     *
     * @param int $id
     *
     * @return bool
     */
    public function createPurchase(int $id) : bool
    {
        return true;
    }
}
