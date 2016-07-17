<?php

namespace App\Repositories;

/**
 * Interface CancelRepositoryInterface
 */
interface CancelRepositoryInterface
{
    /**
     * @param $id
     * @return bool
     */
    public function appendList($id);
}