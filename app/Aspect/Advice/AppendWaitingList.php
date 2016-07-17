<?php

namespace App\Aspect\Advice;

use App\Exceptions\NoStockException;
use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

/**
 * Class AppendWaitingList
 */
class AppendWaitingList implements MethodInterceptor
{
    /**
     * @param MethodInvocation $invocation
     * @return object
     */
    public function invoke(MethodInvocation $invocation)
    {
        try {
            return $invocation->proceed();
        } catch (NoStockException $e) {

        }
    }
}