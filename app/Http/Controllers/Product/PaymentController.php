<?php

namespace App\Http\Controllers\Product;

use App\Services\ProductPayment;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
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
        dd(\App\Services\Aspect\ProductPayment::class);
        return new JsonResponse([
            'purchase' => $this->payment->purchase(1)
        ]);
    }
}
