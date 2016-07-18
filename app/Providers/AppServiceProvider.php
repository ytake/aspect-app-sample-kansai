<?php

namespace App\Providers;

use App\Modules\LoggableModule;
use App\Modules\EarnPointModule;
use App\Modules\PaymentPointModule;
use App\Modules\WaitingListModule;
use App\Modules\LogExceptionsModule;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** @var \Ytake\LaravelAspect\AspectManager $aspect */
        $aspect = $this->app['aspect.manager'];
        $aspect->register(WaitingListModule::class);
        $aspect->register(LogExceptionsModule::class);
        $aspect->register(LoggableModule::class);
        $aspect->register(PaymentPointModule::class);
        $aspect->register(EarnPointModule::class);
        $aspect->dispatch();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
