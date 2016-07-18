<?php


namespace App\Aspect\Interceptor;

use App\Services\PointBalance;
use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

class PaymentPointInterceptor implements MethodInterceptor
{
    /** @var PointBalance  */
    protected $balance;

    // 10pointを支払う例
    const PAYMENT_POINT = 10;

    /**
     * PaymentPointInterceptor constructor.
     *
     * @param PointBalance $balance
     */
    public function __construct(PointBalance $balance)
    {
        $this->balance = $balance;
    }

    /**
     * @param MethodInvocation $invocation
     *
     * @return mixed
     */
    public function invoke(MethodInvocation $invocation)
    {
        $this->balance->purchase(self::PAYMENT_POINT);
        $invokeReflectionClass = $invocation->getThis();
        $reflectionClass = new \ReflectionMethod(
            get_class($invokeReflectionClass), $invocation->getMethod()->getName()
        );
        $payment = (int) $invocation->getArguments()->offsetGet(0) - self::PAYMENT_POINT;
        return $reflectionClass->invoke($invokeReflectionClass, $payment);
    }
}
