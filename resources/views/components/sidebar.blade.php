<div>
    <aside class="lg:w-72 lg:fixed z-10 top-0 left-0 overflow-x-hidden w-full lg:min-h-screen  border-r pt-6 bg-white dark:bg-gray-800 dark:text-gray-200 text-gray-800 font-semibold">
        <ul class="px-6">
            <li>Starts</li>
        </ul>
        <ul>
            @foreach($items as $k => $item)
            @if ($item instanceof \App\Support\NavigationItem)
            <li class="@if ($k === 0) mt-2 @endif transition ease-in-out duration-150 px-6">
                <a href="{{ $item->href }}" class="flex items-center rounded-lg focus:outline-none focus:border-gray-200 focus:bg-gray-200  border-gray-300 hover:border-gray-200 hover:bg-gray-200 px-2 -mx-2 mt-3 py-2  text-gray-700">
                    <x-icon :name="$item->icon" :set="$item->iconSet" size="5" solid class="text-gray-500" />
                    <span class="inline-block ml-4">{{ $item->name }}</span>
                </a>
            </li>
            @else
            <ul class="mt-6">
                @if ($item->name)
                <li>
                    <x-overline class="px-6" :content="$item->name" color="gray" />
                </li>
                @endif

                @foreach($item->tree() as $childKey => $child)
                    <li class="@if ($childKey === 0) mt-2 @endif transition ease-in-out duration-150 px-6">
                        <a href="{{ $child->href }}" class="flex items-center rounded-lg  hover:border-gray-200 hover:bg-gray-200 px-2 -mx-2 mt-3 py-2  text-gray-700">
                            <x-icon :name="$child->icon" :set="$child->iconSet" size="5" solid class="text-gray-500" />
                            <span class="inline-block ml-4">{{ $item->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            @endif
            @endforeach
        </ul>
    </aside>
</div>