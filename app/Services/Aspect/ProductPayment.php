<?php

namespace App\Services\Aspect;

use App\Annotation\EarnPoint;
use App\Annotation\PaymentPoint;
use Ytake\LaravelAspect\Annotation\Loggable;

/**
 * Class ProductPayment
 * 商品購入拡張クラス
 */
class ProductPayment extends \App\Services\ProductPayment
{
    /**
     * @Loggable
     * @EarnPoint
     * @PaymentPoint
     *
     * @param int $id
     *
     * @return bool
     */
    public function purchase(int $id)
    {
        return $this->repository->createPurchase($id);
    }
}
