<div x-data="{ sidebarOpen: false }" class="min-h-screen flex flex-col bg-background">
    {{-- Mobile Navbar --}}
    <div class="bg-primary text-primary-foreground p-4 flex justify-between items-center md:hidden">
        {{-- Toggle button --}}
        <button @click="sidebarOpen = !sidebarOpen" class="hover:bg-primary/90 p-2 rounded-full">
            <template x-if="sidebarOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </template>
            <template x-if="!sidebarOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </template>
        </button>

        {{-- Title --}}
        <div class="font-bold">
            {{ $MobileNavbartitle ?? null }}
        </div>

        {{-- Optional extra mobile button --}}
        @isset($mobileNavbarButton)
            {{ $mobileNavbarButton }}
        @endisset
    </div>

        {{-- Sidebar Mobile --}}
        <div x-show="sidebarOpen" class="fixed inset-0 z-40" style="display: none;">
            <div class="fixed inset-0 bg-black/30" @click="sidebarOpen = false"></div>
            <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-72 max-w-sm bg-background p-6 border-r z-50">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-xl font-bold">{{ $title ?? 'Admin Panel' }}</h2>
                    <button @click="sidebarOpen = false" class="p-2 rounded-full hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                {{-- Mobile sidebar content (slot) --}}
                <div class="flex-1 space-y-1">
                    {{ $sidebarContent }}
                </div>

                {{-- Mobile footer (optional slot) --}}
                @isset($sidebarFooter)
                    <div class="pt-6">
                        <div class="border-t border-gray-200 mb-6"></div>
                        <div class="space-y-4">
                            {{ $sidebarFooter }}
                        </div>
                    </div>
                @endisset
            </nav>
        </div>

        {{-- Sidebar Desktop --}}
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <div class="flex-1 flex flex-col min-h-0 border-r bg-card">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center justify-center flex-shrink-0 px-4">
                        <h1 class="text-xl font-bold">{{ $title ?? 'Admin Dashboard' }}</h1>
                    </div>

                    <nav class="mt-8 flex-1 px-4 space-y-1">
                        {{ $sidebarContent }}
                    </nav>
                </div>

                {{-- Desktop sidebarFooter --}}
                @isset($sidebarFooter)
                    <div class="flex-shrink-0 p-4 border-t">
                        {{ $sidebarFooter }}
                    </div>
                @endisset
            </div>
        </div>

        @isset($content)
            <div class="md:pl-64 flex flex-col flex-1">
                <main class="flex-1 p-6">
                    {{ $content }}
                </main>
            </div>
        @endisset
</div>
