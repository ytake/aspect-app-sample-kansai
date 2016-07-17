<?php

namespace App\Services\Aspect;

use App\Annotation\WaitingList;

/**
 * Class ProductReservation
 */
class ProductReservation extends \App\Services\ProductReservation
{
    /**
     * @WaitingList
     * @param int $id
     */
    public function makeReservation(int $id)
    {
        return parent::makeReservation($id);
    }
}
