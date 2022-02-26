<?php

namespace Module\Passenger\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Module\User\Entity\User;

class PassengerServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\Passenger\Http\Controllers';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/passenger.php');
    }
}