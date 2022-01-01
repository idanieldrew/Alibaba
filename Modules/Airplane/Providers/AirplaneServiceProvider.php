<?php

namespace Module\Airplane\Providers;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AirplaneServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\Airplane\Http\Controllers';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/factories');
        Route::prefix('plane')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/plane.php');
    }
}