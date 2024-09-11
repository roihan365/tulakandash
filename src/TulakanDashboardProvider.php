<?php

namespace Roihan365\Dashboard;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Roihan365\Dashboard\View\Components\DashboardLayout;

class TulakanDashboardProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Publish views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tulakandashboard');

        // Publish routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Publish assets (optional)
        $this->publishes([
            __DIR__ . '/../public/assets' => public_path('vendor/tulakandashboard'),
        ], 'public');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // dd('ahay ganteng');
        Blade::componentNamespace('Roihan365\\Dashboard\\View\\Components', 'tulakandashboard');
    }
}
