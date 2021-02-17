<div x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false"
     class="relative inline-block  text-left">
    {{ $trigger }}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="origin-top-{{ $side }} absolute {{ $side }}-0 mt-1 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
        <div class="py-1 " role="menu" aria-orientation="vertical">
            {{ $slot }}
        </div>
    </div>
</div>
