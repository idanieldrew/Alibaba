<?php

namespace Module\Flight\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class FlightServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\Flight\Http\Controllers';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        Route::prefix('flight')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/flight.php');
    }
}