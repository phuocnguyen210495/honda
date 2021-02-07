<div x-data="{ open: false }">
    <div class="min-h-screen h-full flex">
        <div
            class="fixed inset-y-0 left-0 w-full max-w-xs bg-gray-800 lg:static lg:inset-auto lg:translate-x-0 transform transition duration-300 z-40 ease-in"
            x-bind:class="{ '-translate-x-full': !open, '-translate-x-0': open }">
            <div class="flex items-center justify-between bg-gray-900 p-4">
                <div class="flex-1">
                    <div class="mx-2 my-3">
                        <x-application-logo context="sidebar"/>
                    </div>
                </div>
                <button type="button"
                        x-show="open"
                        class="absolute top-0 right-0 -mr-12 text-white mt-2 p-2 lg:hidden focus:outline-none">
                    <svg fill="none" viewbox="0 0 24 24" class="h-6 w-6">
                        <path d="M6 18L18 6M6 6L18 18" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              stroke="currentColor"></path>
                    </svg>
                </button>
            </div>
            <button @click="open = false"
                    x-show="open"
                    class="absolute top-0 right-0 -mr-12 text-white mt-2 p-2 lg:hidden focus:outline-none">
                <x-icon name="x" size="6"/>
            </button>
            <nav>
                <div class="px-3 mt-4 space-y-2 lg:space-y-3">
                    @foreach($items as $item)
                        @if ($item instanceof \App\Support\NavigationItem)
                            <a href="{{ $item->href }}"
                               class="transition duration-100 flex items-center px-4 @if ($item->icon) py-3 @else py-3.5 @endif rounded-lg @if ($item->isActive()) bg-gray-900 @else hover:bg-gray-900 @endif"
                               @if ($item->isActive()) aria-current="page" @endif>
                                @if ($item->icon)
                                    <x-icon name="{{ $item->icon }}" size="5" class="text-gray-500"
                                            icon-set="{{ $item->iconSet }}"/>
                                @endif
                                <span
                                    class="font-medium leading-none text-gray-300 inline-block @if ($item->icon) ml-3 @endif">{{ $item->name }}</span>
                            </a>
                        @else
                            <div class="space-y-2 lg:space-y-3">
                                @if ($item->name)
                                    <span
                                        class="inline-block mt-4 px-1 text-gray-600 uppercase font-bold text-xs tracking-widest">{{ $item->name}}</span>
                                @endif
                                @foreach($item->tree() as $child)
                                    <a href="{{ $child->href }}"
                                       class="transition duration-100 flex items-center px-4 @if ($child->icon) py-3 @else py-3.5 @endif rounded-lg @if ($child->isActive()) bg-gray-900 @else hover:bg-gray-900 @endif"
                                       @if ($child->isActive()) aria-current="page" @endif>
                                        @if ($child->icon)
                                            <x-icon name="{{ $child->icon }}" size="5" class="text-gray-500"
                                                    icon-set="{{ $child->iconSet }}"/>
                                        @endif
                                        <span
                                            class="font-medium leading-none text-gray-300 inline-block @if ($child->icon) ml-3 @endif">{{ $child->name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </div>
            </nav>
        </div>
        <button x-show="open" class="bg-gray-900 bg-opacity-50 w-full h-full fixed z-30"></button>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>
