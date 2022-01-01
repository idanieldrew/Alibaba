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
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/factories');
        Route::prefix('flight')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/flight.php');
    }
}