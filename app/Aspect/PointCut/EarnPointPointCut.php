<?php

namespace App\Aspect\PointCut;

use App\Annotation\EarnPoint;
use App\Services\PointBalance;
use App\Aspect\Interceptor\EarnPointInterceptor;
use Illuminate\Contracts\Container\Container;
use Ray\Aop\Pointcut;

/**
 * Class EarnPoint
 */
class EarnPointPointCut extends PaymentPointPointCut
{
    /** @var string */
    protected $annotation = EarnPoint::class;

    /**
     * @param Container $app
     *
     * @return \Ray\Aop\Pointcut
     */
    public function configure(Container $app) : Pointcut
    {
        $interceptor = new EarnPointInterceptor(
            $app->make(PointBalance::class)
        );
        $this->setInterceptor($interceptor);

        return $this->withAnnotatedInterceptor($app);
    }
}
