<?php
namespace Roihan365\Dashboard\Install;

use Illuminate\Console\Command;
use RuntimeException;
use Symfony\Component\Process\Process;

class InstallLibrary extends Command
{
    // Nama command yang akan dipanggil dari CLI
    protected $signature = 'tulakandash:install';

    // Deskripsi perintah
    protected $description = 'Install the dashboard resources and dependencies';

    public function handle(): void
    {
        $this->installResource();
    }

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

        $this->info('Installing and building Node dependencies.');
        $this->runCommands(['npm install', 'npm run build']);
        $this->info('Dashboard resources installed successfully.');
    }

    public static function updateNodePackages(callable $callback, $dev = true)
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';
        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . PHP_EOL
        );
    }

    protected function runCommands($commands)
    {
        $process = Process::fromShellCommandline(implode(' && ', $commands));

        if ('\\' !== DIRECTORY_SEPARATOR && file_exists('/dev/tty') && is_readable('/dev/tty')) {
            try {
                $process->setTty(true);
            } catch (RuntimeException $e) {
                $this->error('Could not set TTY mode: ' . $e->getMessage());
            }
        }

        $process->run(function ($type, $line) {
            $this->output->write('    ' . $line);
        });
    }
}