<?php

namespace Module\Hotel\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Module\Hotel\Entity\Hotel;
use Module\Hotel\Observers\HotelObserver;

class HotelServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\Hotel\Http\Controllers';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/factories');
        Route::prefix('hotel')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/hotel.php');
    }

    public function boot()
    {
        Hotel::observe(HotelObserver::class);
    }
}