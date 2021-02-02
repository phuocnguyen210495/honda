<div>
    <aside class="lg:max-w-xs lg:fixed z-10 top-0 left-0 overflow-x-hidden w-full lg:min-h-screen  border-r pt-6 bg-white text-gray-800 font-semibold">
        <ul class="pl-6">
            <li>Starts</li>
        </ul>
        <ul>
            @foreach($items as $k => $item)
                @if ($item instanceof \App\Support\NavigationItem)
                    <li class="mt-4 p-4 pl-10 hover:bg-gray-100 text-gray-700">
                    <a href="{{ $item->href }}" class="inline-flex items-center">
                        <x-icon :name="$item->icon" :set="$item->iconSet" size="4" solid />
                        <span class="inline-block ml-2">{{ $item->name }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </aside>
</div>