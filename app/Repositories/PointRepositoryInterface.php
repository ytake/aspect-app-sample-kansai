<?php

namespace App\Repositories;

/**
 * Interface PointRepositoryInterface
 */
interface PointRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return bool
     */
    public function hasBalance(int $id) : bool;

    /**
     * ポイント利用
     *
     * @param int $point
     *
     * @return bool
     */
    public function point(int $point) : bool;

    /**
     * @param int $point
     *
     * @return bool
     */
    public function appendPoint(int $point) : bool;
}
