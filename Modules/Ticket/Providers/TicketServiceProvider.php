<?php

namespace Module\Ticket\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TicketServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\Ticket\Http\Controllers';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/factories');
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/ticket.php');
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