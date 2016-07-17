<?php

namespace App\Providers;

use App\Modules\WaitingListModule;
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
