<?php

namespace Module\Relations\Providers;
use Illuminate\Support\ServiceProvider;

class RelationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }
}