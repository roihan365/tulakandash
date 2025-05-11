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

This command will copy the necessary views, routes, and components to your Laravel application.

### 4. Update Routes

Open `routes/web.php` and include the TULAKANDASH routes by adding this line:

```php
require __DIR__ . '/dashboard.php';
```

### 5. Compile Assets

If you have not yet configured Tailwind CSS, run the following commands to compile the assets:

```bash
npm install
npm run dev
```

## ✅ Usage

After installation, you can start using the TULAKANDASH components in your Blade views.

### 1. Dashboard Layout

The main layout wrapper that includes the sidebar, header, and main content area.

```html
<x-dashboard-layout>
    <x-dashboard.main title="Dashboard">
        <x-slot name="content">
            <h1 class="text-3xl font-bold">Dashboard Content</h1>
        </x-slot>
    </x-dashboard.main>
</x-dashboard-layout>
```

### 2. Sidebar Content

Customize the sidebar content using the `sidebarContent` slot.

```html
<x-slot name="sidebarContent">
    <x-dashboard.button href="/admin/posts" variant="secondary">Posts</x-dashboard.button>
    <x-dashboard.button href="/admin/users" variant="ghost">Users</x-dashboard.button>
</x-slot>
```

### 3. Mobile Navbar Button

A slot for mobile-specific buttons, such as the logout button.

```html
<x-slot name="mobileNavbarButton">
    <form method="POST" action="#">
        @csrf
        <x-dashboard.button type="submit" class="text-primary-foreground">
            Logout
        </x-dashboard.button>
    </form>
</x-slot>
```

### 4. Sidebar Footer

Additional buttons or links for the sidebar footer section.

```html
<x-slot name="sidebarFooter">
    <x-dashboard.button href="/" variant="outline">Home</x-dashboard.button>
</x-slot>
```

### 5. Dashboard Card

A card component used to display data or information in a styled container.

```html
<x-dashboard.card>
    <x-dashboard.card.header>
        <x-dashboard.card.title>Active Users</x-dashboard.card.title>
    </x-dashboard.card.header>
    <x-dashboard.card.content>
        <div class="text-2xl font-bold">150</div>
        <x-dashboard.card.description>Total Users</x-dashboard.card.description>
    </x-dashboard.card.content>
</x-dashboard.card>
```

### 6. Refresh Button

A button that can be used to trigger actions such as refreshing content.

```html
<button class="border rounded px-4 py-2 flex items-center text-sm hover:bg-gray-100">
    <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v6h6M20 20v-6h-6M9 14l-5 5m0-5h5m7-9l5-5m0 5h-5" />
    </svg>
    Refresh
</button>
```

## 📢 Contribution

We welcome contributions from the community. Please feel free to open issues, submit pull requests, or suggest new features.
