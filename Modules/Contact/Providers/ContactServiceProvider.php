<?php

namespace Module\Contact\Providers;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ContactServiceProvider extends ServiceProvider
{
    protected $namespace = 'Module\Contact\Http\Controllers';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }
}