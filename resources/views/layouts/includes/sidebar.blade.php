<div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    class="sidebar transform md:transform-none transition-transform duration-300 ease-in-out w-full md:w-80 bg-white text-[#484848] fixed md:sticky top-0 h-screen z-20">
    <!-- Sidebar Toggle Button (visible on mobile) -->
    <div class="md:hidden p-9 absolute">
        <button id="sidebarToggle" class="focus:outline-none" @click="sidebarOpen = !sidebarOpen">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
    <div class="flex flex-col items-center justify-center bg-sidebar-logo p-6">
        <!-- Logo atau Tulisan -->
        <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'
            class="h-28 rounded-full mb-3" />
        <span class="text-2xl font-bold">Tulakanspace</span>
        <p class="font-light text-sm">Rian Hendra</p>
        <hr class="w-full mt-5 border-t-2">
    </div>

    <div class="p-4">
        <div class="text-lg font-bold mb-4">Menu</div>
        <ul>
            <li class="mb-2">
                <a href="#"
                    class="p-2 hover:bg-primary hover:text-white rounded flex items-center gap-x-4 text-gray-500">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zM13 21h8V10h-8v11zM13 3v5h8V3h-8z" />
                    </svg>
                    Dashboard
                </a>
            </li>
        </ul>

        <ul>
            <li class="mb-2">
                <a href="#"
                    class="p-2 hover:bg-primary hover:text-white rounded flex items-center gap-x-4 text-gray-500">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 17h18v2H3v-2zm5-7h3v7H8v-7zm5-4h3v11h-3V6zm5 8h3v3h-3v-3zM3 7h3v10H3V7z" />
                    </svg>
                    Analytic
                </a>
            </li>
        </ul>

        <ul>
            <li class="mb-2">
                <a href="#"
                    class="p-2 hover:bg-primary hover:text-white rounded flex items-center gap-x-4 text-gray-500">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 6H3v10h14l4 4V6zM3 4h18a2 2 0 012 2v12a2 2 0 01-2 2H5.83L3 22.83V4z" />
                    </svg>
                    Message
                </a>
            </li>
        </ul>

        <p class="p-2">Account</p>
        <ul>
            <li class="mb-2">
                <a href="#"
                    class="p-2 hover:bg-primary hover:text-white rounded flex items-center gap-x-4 text-gray-500">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 15.5A3.5 3.5 0 1112 8a3.5 3.5 0 010 7.5zM12 2a10 10 0 0110 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2m0 2a8 8 0 100 16 8 8 0 000-16z" />
                    </svg>
                    Setting
                </a>
            </li>
        </ul>
    </div>
</div>
