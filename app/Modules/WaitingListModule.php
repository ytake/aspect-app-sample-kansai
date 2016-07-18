<?php

namespace App\Modules;

use App\Services\Aspect\ProductReservation;
use App\Aspect\PointCut\WaitingListPointCut;
use Ytake\LaravelAspect\Modules\AspectModule;

/**
 * Class WaitingListModule
 */
class WaitingListModule extends AspectModule
{
    /** @var string[] */
    protected $classes = [
        ProductReservation::class,
    ];

    /**
     * @return WaitingListPointCut
     */
    protected function registerPointCut() : WaitingListPointCut
    {
        return new WaitingListPointCut;
    }
}
