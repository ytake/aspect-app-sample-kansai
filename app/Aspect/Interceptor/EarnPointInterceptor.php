<?php


namespace App\Aspect\Interceptor;

use App\Services\PointBalance;
use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

class EarnPointInterceptor implements MethodInterceptor
{
    /** @var PointBalance  */
    protected $balance;

    // 付与ポイント
    const EARN_POINT = 1;

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
        $result = $invocation->proceed();
        // ポイント付与
        $this->balance->point(self::EARN_POINT);
        return $result;
    }
}
