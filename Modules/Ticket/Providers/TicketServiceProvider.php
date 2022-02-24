<?php

namespace Module\Ticket\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TicketServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\Ticket\Http\Controllers';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/ticket.php');
    }
}