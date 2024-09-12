<?php

namespace Roihan365\Dashboard;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Roihan365\Dashboard\Install\InstallLibrary;
use Roihan365\Dashboard\View\Components\DashboardLayout;

class TulakanDashboardProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // // Publish views
        // $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tulakandashboard');

        // // Publish routes
        // $this->loadRoutesFrom(__DIR__ . '/../routes/dashboard.php');

        // // Publish assets (optional)
        // $this->publishes([
        //     __DIR__ . '/../public/assets' => public_path('vendor/tulakandashboard'),
        // ], 'public');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // dd('ahay ganteng');
        // if (! $this->app->runningInConsole()) {
        //     return;
        // }

        // $this->commands([
        //     Install\InstallLibrary::class,
        // ]);
        // Blade::componentNamespace('Roihan365\\Dashboard\\View\\Components', 'tulakandashboard');

        // Publikasi views, assets, konfigurasi, dan rute
        // $this->publishes([
        //     __DIR__ . '/../resources/views' => resource_path('views/tulakandashboard'),
        //     __DIR__ . '/../public/assets' => public_path('vendor/tulakandashboard'),
        // ], 'tulakandashboard');

        // Daftarkan command jika dijalankan dari CLI
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallLibrary::class,
            ]);
        }
    }
}
