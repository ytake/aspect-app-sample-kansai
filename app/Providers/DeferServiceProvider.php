<?php

namespace App\Providers;

use App\Repositories\{
    CancelRepository,
    CancelRepositoryInterface,
    PaymentRepository,
    PaymentRepositoryInterface,
    Product\ReserveRepository,
    Product\ReserveRepositoryInterface,
    PointRepository,
    PointRepositoryInterface
};
use App\Services\PointBalance;
use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(PaymentRepositoryInterface::class, PaymentRepository::class);
        $this->app->bind(PointRepositoryInterface::class, PointRepository::class);
        $this->app->singleton(PointBalance::class, PointBalance::class);
    }

    /**
     * {@inheritdoc}
     */
    public function provides() : array
    {
        return [
            PointRepositoryInterface::class,
            CancelRepositoryInterface::class,
            ReserveRepositoryInterface::class,
            PaymentRepositoryInterface::class,
            PointBalance::class,
        ];
    }
}
