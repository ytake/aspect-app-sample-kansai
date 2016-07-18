<?php

namespace App\Http\Controllers\Product\Aspect;

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

    /**
     * PaymentController constructor.
     *
     * @param ProductPayment $payment
     */
    public function __construct(ProductPayment $payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function purchase() : Response
    {
        return new JsonResponse([
            'purchase' => $this->payment->purchase(1)
        ]);
    }
}
