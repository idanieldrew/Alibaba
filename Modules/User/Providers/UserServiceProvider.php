<?php

namespace Module\User\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\User\Http\Controllers';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__. '/../Database/Migrations');
        $this->loadFactoriesFrom(__DIR__. '/../Database/Factories');
        Route::prefix('user')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/user.php');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}