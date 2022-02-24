<?php

namespace Module\User\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Module\User\Entity\User;

class UserServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\User\Http\Controllers';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/factories');
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/user.php');
    }
}