<?php

namespace App\Aspect\PointCut;

use Ray\Aop\Pointcut;
use Ray\Aop\Matcher;
use App\Repositories\CancelRepositoryInterface;
use App\Services\ProductReservation;
use App\Services\ProductWaiter;
use App\Annotation\WaitingList;
use App\Aspect\Interceptor\WaitingListInterceptor;
use Illuminate\Contracts\Container\Container;
use Ytake\LaravelAspect\PointCut\CommonPointCut;
use Ytake\LaravelAspect\PointCut\PointCutable;

/**
 * Class WaitingListPointCut
 */
class WaitingListPointCut extends CommonPointCut implements PointCutable
{
    /** @var string */
    protected $annotation = WaitingList::class;

    /**
     * @param Container $app
     *
     * @return Pointcut
     */
    public function configure(Container $app) : Pointcut
    {
        $advice = new WaitingListInterceptor(
            new ProductWaiter($app->make(CancelRepositoryInterface::class))
        );
        $this->setInterceptor($advice);

        return $this->withAnnotatedReserveInterceptor($app);
    }

    /**
     * @param Container $app
     *
     * @return PointCut
     */
    protected function withAnnotatedReserveInterceptor(Container $app) : Pointcut
    {
        return new Pointcut(
            (new Matcher)->subclassesOf(ProductReservation::class),
            (new Matcher)->annotatedWith($this->annotation),
            [$this->interceptor]
        );
    }
}
