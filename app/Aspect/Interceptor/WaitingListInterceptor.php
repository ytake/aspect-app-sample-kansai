<?php

namespace App\Aspect\Interceptor;

use App\Exceptions\NoStockException;
use App\Services\ProductWaiter;
use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

/**
 * Class WaitingListInterceptor
 */
class WaitingListInterceptor implements MethodInterceptor
{
    /** @var ProductWaiter */
    protected $waiter;

    /**
     * WaitingListInterceptor constructor.
     *
     * @param ProductWaiter $waiter
     */
    public function __construct(ProductWaiter $waiter)
    {
        $this->waiter = $waiter;
    }

    /**
     * @param MethodInvocation $invocation
     *
     * @return mixed
     */
    public function invoke(MethodInvocation $invocation)
    {
        try {
            return $invocation->proceed();
        } catch (NoStockException $e) {
            return $this->waiter->append($invocation->getArguments()->offsetGet(0));
        }
    }
}
