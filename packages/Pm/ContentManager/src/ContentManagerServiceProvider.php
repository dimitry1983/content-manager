<?php

namespace Pm\ContentManager;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ContentManagerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // ✅ Routes laden
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // ✅ Views laden (voor gebruik via view('contentmanager::...')
        $this->loadViewsFrom(__DIR__.'/views', 'contentmanager');

        // ✅ Anonymous Blade components (zoals <x-contentmanager::layout>)
        Blade::anonymousComponentPath(__DIR__.'/views/components', 'contentmanager');

        // ✅ Migrations automatisch laden
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // ✅ Seeder publiceerbaar maken
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../database/seeders/ContentSeeder.php' =>
                    database_path('seeders/ContentSeeder.php'),
            ], 'contentmanager-seeders');

            // (optioneel) publiceerbare views
            $this->publishes([
                __DIR__.'/views' => resource_path('views/vendor/contentmanager'),
            ], 'contentmanager-views');
        }
    }

    public function register(): void
    {
        //
    }
}
