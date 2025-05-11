# TULAKANDASH - Tailwind Admin Dashboard

**TULAKANDASH** is a modern, responsive admin dashboard template built using Tailwind CSS. It provides a sleek and intuitive user interface for managing various backend systems, with highly customizable components that can be adapted to fit a wide range of applications.

## 📦 Features

* **Responsive Design:** Optimized for different screen sizes, ensuring a seamless experience across devices.
* **Tailwind CSS:** Built using Tailwind CSS for rapid UI development and easy customization.
* **Alpine JS:** Adds interactivity and reactivity to components.
* **Modular Components:** Pre-built components for rapid development.
* **Developer Friendly:** Easy to install, configure, and extend.

## 🚀 Installation

Follow these steps to set up TULAKANDASH in your Laravel application.

### 1. Create a New Laravel Application

If you do not have a Laravel project, create a new one:

```bash
composer create-project laravel/laravel my-laravel-app
```

### 2. Install the TULAKANDASH Package

If you already have a Laravel project, you can install the TULAKANDASH package via Composer:

```bash
composer require roihan365/tulakandashboard
```

### 3. Publish Resources

Run the following Artisan command to publish the package assets:

```bash
php artisan tulakandash:install
```

This command will install the necessary depedencies and components to your Laravel application.

### 4. Compile Assets

If you have not yet configured Tailwind CSS, run the following commands to compile the assets:

```bash
npm install
npm run dev
```

## ✅ Usage

After installation, you can start using the TULAKANDASH components in your Blade views.
For full example code implementation you can see https://ahay.my.id/docs/tulakan-dashboard

### 1. Dashboard Layout

The main layout wrapper that includes the sidebar, header, and main content area.

```html
<x-dashboard-layout>
    <x-dashboard-main title="Dashboard">
        <x-slot name="content">
            <h1 class="text-2xl font-bold">Welcome to the Dashboard</h1>
        </x-slot>
    </x-dashboard-main>
</x-dashboard-layout>
```

### 2. Sidebar Content

Customize the sidebar by adding buttons or links for navigation.

```html
<x-slot name="sidebarContent">
    <x-dashboard-button href="/admin/posts" variant="secondary">Posts</x-dashboard-button>
    <x-dashboard-button href="/admin/users" variant="ghost">Users</x-dashboard-button>
</x-slot>
```

### 3. Dashboard Card

A card component used to display data or information in a styled container.

```html
<x-dashboard-card>
    <x-dashboard-card-header>
        <x-dashboard-card-title>Users</x-dashboard-card-title>
    </x-dashboard-card-header>
    <x-dashboard-card-content>
        <div class="text-xl font-bold">150</div>
        <x-dashboard-card-description>Total Users</x-dashboard-card-description>
    </x-dashboard-card-content>
</x-dashboard-card>
```

### 4. Dashboard Button

Reusable button component with various variants for different purposes.

```html
<x-dashboard-button href="/logout" variant="primary">Logout</x-dashboard-button>
```

### 5. Dashboard Main Content

The main content area of the dashboard layout.

```html
<x-slot name="content">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <x-dashboard-card>
            <x-dashboard-card-header>
                <x-dashboard-card-title>Active Users</x-dashboard-card-title>
            </x-dashboard-card-header>
            <x-dashboard-card-content>
                <div class="text-2xl font-bold">5</div>
                <x-dashboard-card-description>Jumlah pengguna aktif</x-dashboard-card-description>
            </x-dashboard-card-content>
        </x-dashboard-card>
    </div>
</x-slot>
```

## 📢 Contribution

We welcome contributions from the community. Please feel free to open issues, submit pull requests, or suggest new features.
