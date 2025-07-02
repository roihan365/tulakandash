<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

@stack('styles')

<body class="bg-background" x-data="{ sidebarOpen: false, open: false, openDetail: 0 }">
    <!-- Layout -->
    <x-dashboard.main title="ahay">
        @include('layouts.includes.dashboard.sidebar')

        <x-slot name="content">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold">Dashboard</h1>
                <button class="border rounded px-4 py-2 flex items-center text-sm hover:bg-gray-100 disabled:opacity-50"
                    onclick="fetchStats()">
                    <svg class="h-4 w-4 mr-2 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <!-- RefreshCw Icon Path -->
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v6h6M20 20v-6h-6M9 14l-5 5m0-5h5m7-9l5-5m0 5h-5" />
                    </svg>
                    Refresh
                </button>
            </div>

            {{ $slot }}

        </x-slot>
    </x-dashboard.main>

    @stack('scripts')
</body>

</html>
