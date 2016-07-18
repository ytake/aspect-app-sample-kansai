<?php

namespace App\Services\Aspect;

use App\Annotation\WaitingList;
use Ytake\LaravelAspect\Annotation\LogExceptions;

/**
 * Class ProductReservation
 */
class ProductReservation extends \App\Services\ProductReservation
{
    /**
     * キャンセル待ちを利用する様に拡張します
     * 基盤的関心事のログ出力も行います
     *
     * @WaitingList
     * @LogExceptions
     * @param int $id
     *
     * @return bool
     */
    public function makeReservation(int $id)
    {
        return parent::makeReservation($id);
    }
}
