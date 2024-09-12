<div class="w-full bg-white shadow-md p-4 flex justify-between items-center md:justify-end sticky top-0">
    <!-- Sidebar Toggle Button (visible on mobile) -->
    <div class="md:hidden">
        <button id="sidebarToggle" class="focus:outline-none" @click="sidebarOpen = !sidebarOpen">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- User Dropdown -->
    <div class="relative">
        <button @click="open = !open" class="flex items-center space-x-3 focus:outline-none">
            <img src="https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light"
                class="h-8 w-8 rounded-full" alt="User Avatar">
            <span class="text-gray-700 font-semibold">Rian Hendra</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="open" @click.outside="open = false" x-transition
            class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
        </div>
    </div>
</div>
