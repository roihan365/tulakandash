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
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard');

        // Load component (opsional)
        Blade::component('dashboard-layout', DashboardLayout::class);
        $componentPath = __DIR__ . '/../resources/views/components';

        // Cek apakah folder komponen ada
        if (is_dir($componentPath)) {
            $files = scandir($componentPath);

            // Mendaftarkan setiap komponen di dalam folder sebagai komponen Blade
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    // Ambil nama file tanpa ekstensi .blade.php
                    $componentName = pathinfo($file, PATHINFO_FILENAME); // Ambil nama file tanpa ekstensi
                    $componentName = str_replace('.blade', '', $componentName); // Pastikan ekstensi .blade dihapus jika ada

                    // Daftarkan komponen Blade dengan nama yang benar
                    Blade::component('dashboard::components.' . $componentName, 'dashboard-' . $componentName);
                }
            }
        }
    }
}
