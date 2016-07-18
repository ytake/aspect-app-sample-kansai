<?php

namespace App\Modules;

use App\Services\Aspect\ProductPayment;
use Ytake\LaravelAspect\Modules\LoggableModule as PackageLoggableModule;

/**
 * Class LoggableModule
 */
class LoggableModule extends PackageLoggableModule
{
    /** @var array */
    protected $classes = [
        ProductPayment::class,
    ];
}
