<button class="flex text-left focus:outline-none w-full p-4 hover:bg-gray-100 focus:bg-gray-100"
        @click="searchTerm = '{{ $name }}'"
        x-show="show = searchTerm.length === 0 || ('{{ strtolower($name) }}'.includes(searchTerm.toLowerCase()) && searchTerm !== '{{ $name }}'); if (show && !matches.includes('{{ $name }}')) { matches.push('{{ $name }}') } if (!show && matches.includes('{{ $name }}')) { matches = matches.filter(_ => _ !== '{{ $name }}') }"
>
    {{ $slot }}
</button>
