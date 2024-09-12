# TULAKANDASH - Tailwind Admin Dashboard

**TULAKANDASH** is a modern, responsive admin dashboard template built using the Tailwind CSS framework. Designed to provide a sleek and intuitive user interface for managing various backend systems, this template is highly customizable and can be easily adapted to fit a wide range of applications.

## Features
- **Responsive Design**: Optimized for different screen sizes, providing a seamless experience across devices.
- **Tailwind CSS**: Utilizes the power of Tailwind CSS for highly customizable and scalable UI design.
- **Alpine JS**: Enhances interactivity with Alpine JS.
- **Modular Components**: Includes pre-built components to speed up the development process.
- **Developer Friendly**: Easy to install and configure, with comprehensive documentation and best practices followed.

## Installation

To get started with TULAKANDASH, follow these steps:

### 1. Create a New Laravel Application
If you do not have a Laravel application yet, you can create one using Composer:
```bash
composer create-project laravel/laravel my-laravel-app
```
### 2. Install TULAKANDASH package
If you have an existing Laravel application, you can install the TULAKANDASH package using Composer:
```bash
  composer require roihan365/tulakandashboard
```
### 3. Run Artisan Command
After installing the package, publish the views, routes, components, and other resources using the following Artisan command:
```bash
  php artisan tulakan:install
```
This command will copy the package's resources into your Laravel application, allowing you to start using the dashboard components immediately.

### 4. Add Route Code to `routes/web.php`
Add the following line to the end of your `routes/web.php` file:
```bash
  require __DIR__ . '/dashboard.php';
```


## Usage
After installation, you can use the pre-built components and layout in your Laravel views. For example, you can include the dashboard layout in your Blade templates like this:
```bash
  <x-dashboard-layout>
    <h2 class="text-2xl font-bold">Welcome to the Dashboard</h2>
    <p class="mt-4">This is your dashboard template built with Tailwind CSS.</p>
  </x-dashboard-layout>
```

## Contribution
Contributions to TULAKANDASH are welcome and greatly appreciated! Whether you want to report a bug, suggest a feature, or submit a pull request.
