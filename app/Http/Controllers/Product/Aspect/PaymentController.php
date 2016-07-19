<?php

namespace App\Http\Controllers\Product\Aspect;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Services\Aspect\ProductPayment;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class PaymentController
 */
class PaymentController extends Controller
{
    /** @var ProductPayment */
    protected $payment;

    /** @var Dispatcher  */
    protected $dispatcher;

    /**
     * PaymentController constructor.
     *
     * @param ProductPayment $payment
     * @param Dispatcher     $dispatcher
     */
    public function __construct(ProductPayment $payment, Dispatcher $dispatcher)
    {
        $this->payment = $payment;
        $this->dispatcher = $dispatcher;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function purchase() : Response
    {
        $message = [];
        $this->dispatcher->listen('point.append', function($e) use (&$message){
            $message = $e;
        });
        return new JsonResponse([
            'purchase' => $this->payment->purchase(1),
            'append_message' => $message
        ]);
    }
}
