<button class="flex text-left focus:outline-none w-full p-4 hover:bg-gray-100 focus:bg-gray-100" @click="search = '{{ $name }}'" x-show="'{{ strtolower($name) }}'.includes(search.toLowerCase()) && search !== '{{ $name }}'">
    {{ $slot }}
</button>