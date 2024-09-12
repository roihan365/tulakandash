<?php

namespace Roihan365\Dashboard\Install;

use Illuminate\Filesystem\Filesystem;

trait InstallResource
{
    protected function installResource()
    {
        $this->updateNodePackages(function ($packages) {
            return [
                '@tailwindcss/forms' => '^0.5.2',
                'alpinejs' => '^3.4.2',
                'autoprefixer' => '^10.4.2',
                'postcss' => '^8.4.31',
                'tailwindcss' => '^3.1.0',
            ] + $packages;
        });

        // Publikasi file views, components, dan asset
        $this->info('Publishing assets, views, and components...');
        $this->call('vendor:publish', ['--tag' => 'tulakandashboard']);

        // Views...
        (new Filesystem)->ensureDirectoryExists(resource_path('views'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../resources/views', resource_path('views'));

        // Components...
        (new Filesystem)->ensureDirectoryExists(app_path('View/Components'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../View/Components', app_path('View/Components'));

        // Route
        (new Filesystem)->ensureDirectoryExists(base_path('routes'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../routes', base_path('routes'));

        $this->info('Installing and building Node dependencies.');
        $this->runCommands(['npm install', 'npm run build']);
        $this->info('Dashboard library installed successfully.');
        $this->components->info('Dashboard scaffolding installed successfully.');
    }
}
