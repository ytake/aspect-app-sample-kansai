<?php

namespace App\Modules;

use App\Services\Aspect\ProductReservation;
use Ytake\LaravelAspect\Modules\LogExceptionsModule as PackageLogExceptionsModule;

/**
 * Class LogExceptionsModule
 */
class LogExceptionsModule extends PackageLogExceptionsModule
{
    /** @var array */
    protected $classes = [
        ProductReservation::class,
    ];
}
