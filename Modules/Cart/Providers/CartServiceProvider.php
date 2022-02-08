<?php

namespace Module\Cart\Providers;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

class CartServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\Cart\Http\Controllers';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/factories');
        Route::prefix('cart')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/cart.php');
    }
}