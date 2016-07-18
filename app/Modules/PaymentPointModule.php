<?php

namespace App\Modules;

use App\Aspect\PointCut\PaymentPointPointCut;
use App\Services\Aspect\ProductPayment;
use Ytake\LaravelAspect\Modules\AspectModule;

/**
 * Class PaymentPointModule
 */
class PaymentPointModule extends AspectModule
{
    /** @var string[] */
    protected $classes = [
        ProductPayment::class,
    ];

    /**
     * @return PaymentPointPointCut
     */
    protected function registerPointCut() : PaymentPointPointCut
    {
        return new PaymentPointPointCut;
    }
}
