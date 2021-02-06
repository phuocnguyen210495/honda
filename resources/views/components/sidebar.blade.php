<div>
    <div class="min-h-screen h-full flex">
        <div
            class="fixed inset-y-0 left-0 w-full max-w-xs bg-gray-800 lg:static lg:inset-auto lg:translate-x-0 transform transition duration-300 z-40 -translate-x-full ease-in">
            <div class="flex items-center justify-between bg-gray-900 p-4">
                <div class="flex-1">
                    <div class="mx-2 my-3">
                        <svg viewBox="0 0 384 512" fill="currentColor" class="w-10 h-10 text-blue-600">
                            <path
                                d="M192 0C79.7 101.3 0 220.9 0 300.5 0 425 79 512 192 512s192-87 192-211.5c0-79.9-80.2-199.6-192-300.5zm83 415.6c-21.15 20.9-50.64 32.4-83 32.4s-61.87-11.5-83-32.4-33-50.31-33-82.55c0-16.3 5.1-35.18 15.17-56.11 15-31.13 41-67 77.24-106.56L192 144.65l23.59 25.73c36.28 39.57 62.27 75.43 77.24 106.56C302.9 297.87 308 316.75 308 333.05c0 32.24-11.71 61.56-33 82.55z"
                                opacity=".6"
                            ></path>
                            <path
                                d="M276 333.05c0 48.83-34.56 82.95-84 82.95s-84-34.12-84-82.95c0-11.81 4-53.81 84-141 80 87.19 84 129.19 84 141z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <nav>
                <div class="px-3 mt-2 lg:mt-4 space-y-2 lg:space-y-3">
                    @foreach($items as $item)
                        @if ($item->isActive())
                            <a href="{{ $item->href }}"
                               class="transition duration-100 flex items-center px-4 py-3 rounded-lg bg-gray-900"
                               aria-current="page">
                                @if ($item->icon)
                                    <x-icon name="{{ $item->icon }}" size="5" class="text-gray-500"/>
                                @endif
                                <span class="font-medium leading-none text-gray-300 inline-block ml-3">{{ $item->name }}</span>
                            </a>
                        @else
                            <a href="{{ $item->href }}"
                               class="transition duration-100 flex items-center px-4 py-3 rounded-lg hover:bg-gray-900">
                                @if ($item->icon)
                                    <x-icon name="{{ $item->icon }}" size="5" class="text-gray-500"/>
                                @endif
                                <span
                                    class="font-medium leading-none text-gray-300 inline-block ml-3">{{ $item->name }}</span>
                            </a>
                        @endif
                    @endforeach
                    <div class="mx-4">
                        <h3 class="mt-6 lg:mt-8 text-xs font-medium text-gray-600 uppercase tracking-wider">
                            More</h3>
                        <div class="mt-2">
                            <a href="/"
                               class="block text-gray-500 hover:text-gray-400 py-2 transition duration-100">Home</a>
                            <a href="/support"
                               class="block text-gray-500 hover:text-gray-400 py-2 transition duration-100">Support
                                &amp; contact</a>
                            <a href="https://docs.torchci.com" target="_blank" rel="noopener"
                               class="block text-gray-500 hover:text-gray-400 py-2 transition duration-100">Documentation</a>
                            <a href="/privacy-policy"
                               class="block text-gray-500 hover:text-gray-400 py-2 transition duration-100">Privacy
                                Policy</a>
                            <a href="/terms-of-service"
                               class="block text-gray-500 hover:text-gray-400 py-2 transition duration-100">Terms
                                of
                                Service</a>
                            <a href="/security"
                               class="block text-gray-500 hover:text-gray-400 py-2 transition duration-100">Security</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
