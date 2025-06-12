<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Remove Telescope for better performance
        // Only register essential services
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Use guarded models for better security and performance
        Model::preventLazyLoading(!app()->isProduction());
        Model::preventSilentlyDiscardingAttributes(!app()->isProduction());
    }
}
