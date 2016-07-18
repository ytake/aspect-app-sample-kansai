<?php

namespace App\Modules;

use App\Aspect\PointCut\EarnPointPointCut;
use App\Services\Aspect\ProductPayment;
use Ytake\LaravelAspect\Modules\AspectModule;

/**
 * Class EarnPointModule
 */
class EarnPointModule extends AspectModule
{
    /** @var string[] */
    protected $classes = [
        ProductPayment::class,
    ];

    /**
     * @return EarnPointPointCut
     */
    protected function registerPointCut() : EarnPointPointCut
    {
        return new EarnPointPointCut;
    }
}
