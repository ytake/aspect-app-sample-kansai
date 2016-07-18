<?php

namespace App\Http\Controllers\Product\Aspect;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Services\Aspect\ProductReservation;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ReserveController
 */
class ReserveController extends Controller
{
    /** @var ProductReservation */
    protected $reservation;

    /**
     * ReserveController constructor.
     *
     * @param ProductReservation $reservation
     */
    public function __construct(ProductReservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function reserve() : Response
    {
        return new JsonResponse([
            'reserve' => $this->reservation->makeReservation(1)
        ]);
    }
}
