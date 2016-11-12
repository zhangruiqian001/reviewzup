<?php

namespace App\Providers;

use App\Service\ItunesService;
use App\Service\PriceTableService;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\EventDispatcher\Tests\Service;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('ItunesService', function ($app) {
            return new ItunesService();
        });
        $this->app->bind('PriceTableService', function ($app) {
            return new PriceTableService();
        });
    }
}
