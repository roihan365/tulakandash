{{-- Logout button mobile --}}
<x-slot name="mobileNavbarButton">
    <form method="POST" action="#">
        @csrf
        <x-dashboard.button type="submit" class="text-primary-foreground hover:bg-primary/90 p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                fill="currentColor">
                <path
                    d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
            </svg>
        </x-dashboard.button>
    </form>
</x-slot>

{{-- Sidebar content (slot) --}}
<x-slot name="sidebarContent">
    <div x-data="{ 
        openGroups: {
            travel: false,
            user: true
        },
        toggleGroup(group) {
            this.openGroups[group] = !this.openGroups[group];
        }
    }">
        <!-- Dashboard/Home -->
        <x-dashboard.button href="#"
            variant="{{ Route::is('') ? 'secondary' : 'ghost' }}" class="w-full justify-start mb-1">
            <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
        </x-dashboard.button>

        <!-- User Management -->
        <div class="mb-1">
            <button @click="toggleGroup('user')" class="w-full flex items-center justify-between px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">
                <span>User Management</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform" 
                     :class="{ 'rotate-90': openGroups.user }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            <div x-show="openGroups.user" x-collapse class="pl-2">
                <!-- Users -->
                <x-dashboard.button href="#"
                    variant="{{ Route::is('') ? 'secondary' : 'ghost' }}" class="w-full justify-start mb-1">
                    <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Pengguna
                </x-dashboard.button>
            </div>
        </div>
    </div>
</x-slot>

<x-slot name="sidebarFooter">
    <x-dashboard.button href="/" variant="outline" class="w-full justify-start mb-2">
        Kembali ke Website
    </x-dashboard.button>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit"
            class="w-full flex items-center justify-start px-4 py-2 rounded-md bg-red-600 text-white hover:bg-red-700 text-sm font-medium">
            <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V5m-4 8a4 4 0 118 0 4 4 0 01-8 0z" />
            </svg>
            Logout
        </button>
    </form>
</x-slot>