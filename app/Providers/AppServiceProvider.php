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
        // Оптимизация для бесплатного тарифа
        if (app()->environment('production')) {
            // Отключаем ненужные сервисы для экономии ресурсов
            config(['app.debug' => false]);
            config(['logging.default' => 'single']);

            // Ограничиваем количество запросов
            config(['database.connections.sqlite.options' => [
                \PDO::ATTR_TIMEOUT => 5,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            ]]);
        }

        // Оптимизация для Filament
        config(['filament.cache_components' => true]);
    }
}