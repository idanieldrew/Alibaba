<?php

namespace Module\Relations\Providers;
use Illuminate\Support\ServiceProvider;

class RelationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }
}