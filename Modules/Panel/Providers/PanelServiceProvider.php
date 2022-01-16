<?php

namespace Module\Panel\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PanelServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\Panel\Http\Controllers';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Route::prefix('plane')
            ->namespace($this->namespace)
            ->group( __DIR__. '/../Routes/panel.php');
    }
}