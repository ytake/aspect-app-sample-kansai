<?php

namespace App\Aspect\PointCut;

use Ray\Aop\Pointcut;
use Ray\Aop\Matcher;
use App\Services\PointBalance;
use App\Services\ProductPayment;
use App\Annotation\PaymentPoint;
use App\Aspect\Interceptor\PaymentPointInterceptor;
use Illuminate\Contracts\Container\Container;
use Ytake\LaravelAspect\PointCut\CommonPointCut;
use Ytake\LaravelAspect\PointCut\PointCutable;

/**
 * Class PaymentPointPointCut
 */
class PaymentPointPointCut extends CommonPointCut implements PointCutable
{
    /** @var string */
    protected $annotation = PaymentPoint::class;

    /**
     * @param Container $app
     *
     * @return Pointcut
     */
    public function configure(Container $app) : Pointcut
    {
        $interceptor = new PaymentPointInterceptor(
            $app->make(PointBalance::class)
        );
        $this->setInterceptor($interceptor);

        return $this->withAnnotatedInterceptor($app);
    }

    /**
     * @param Container $app
     *
     * @return PointCut
     */
    protected function withAnnotatedInterceptor(Container $app) : Pointcut
    {
        return new Pointcut(
            (new Matcher)->subclassesOf(ProductPayment::class),
            (new Matcher)->annotatedWith($this->annotation),
            [$this->interceptor]
        );
    }
}
