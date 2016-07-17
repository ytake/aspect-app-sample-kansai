<?php

namespace App\Providers;

use App\Repositories\CancelRepository;
use App\Repositories\CancelRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Product\ReserveRepository;
use App\Repositories\Product\ReserveRepositoryInterface;

/**
 * Class DeferServiceProvider
 */
class DeferServiceProvider extends ServiceProvider
{
    /** @var bool */
    protected $defer = true;

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app->bind(CancelRepositoryInterface::class, CancelRepository::class);
        $this->app->bind(ReserveRepositoryInterface::class, ReserveRepository::class);
    }

    /**
     * {@inheritdoc}
     */
    public function provides() : array
    {
        return [
            CancelRepositoryInterface::class,
            ReserveRepositoryInterface::class,
        ];
    }
}
