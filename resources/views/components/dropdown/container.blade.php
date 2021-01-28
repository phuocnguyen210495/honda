<div x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false"
     class="relative inline-block font-medium  text-left">
    <x-dropdown.trigger content="Options" />

    <div x-show="open"
         x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="origin-top-left absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
        <div class="py-1 " role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900"
               role="menuitem">Account settings</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900"
               role="menuitem">Support</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900"
               role="menuitem">License</a>
            <form method="POST" action="#">
                <button type="submit"
                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                        role="menuitem">
                    Sign out
                </button>
            </form>
        </div>
    </div>
</div>
