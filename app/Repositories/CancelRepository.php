<?php

namespace App\Repositories;

/**
 * Class CancelRepository
 */
class CancelRepository implements CancelRepositoryInterface
{
    /**
     * @param $id
     *
     * @return bool
     */
    public function appendList($id) : bool
    {
        return true;
    }
}
