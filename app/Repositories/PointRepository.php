<?php

namespace App\Repositories;

/**
 * Class PointRepository
 */
class PointRepository implements PointRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return bool
     */
    public function hasBalance(int $id) : bool
    {
        return true;
    }

    /**
     * ポイント利用
     *
     * @param int $point
     *
     * @return bool
     */
    public function point(int $point) : bool
    {
        return true;
    }

    /**
     * @param int $point
     *
     * @return bool
     */
    public function appendPoint(int $point) : bool
    {
        return true;
    }
}
