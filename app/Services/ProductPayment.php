<?php

namespace App\Services;

use App\Repositories\PaymentRepositoryInterface;

/**
 * Class ProductPayment
 * 商品購入 基底動作クラス
 */
class ProductPayment
{
    /** @var PaymentRepositoryInterface */
    protected $repository;

    /**
     * ProductPayment constructor.
     *
     * @param PaymentRepositoryInterface $repository
     */
    public function __construct(PaymentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function purchase(int $id)
    {
        return $this->repository->createPurchase($id);
    }
}
