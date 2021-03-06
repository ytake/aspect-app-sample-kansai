<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\JsonResponse;
use App\Exceptions\NoStockException;
use App\Http\Controllers\Controller;
use App\Services\ProductReservation;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ReserveController
 */
class ReserveController extends Controller
{
    /** @var ProductReservation  */
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
        try {
            $result = $this->reservation->makeReservation(1);
        } catch (NoStockException $e) {
            $result = false;
        }
        return new JsonResponse(['reserve' => $result]);
    }
}
