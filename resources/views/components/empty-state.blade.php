<div>
    @if ($show)
        <div class="bg-white lg:rounded-md shadow overflow-hidden p-10 relative">
            <h2 class="text-2xl lg:text-3xl font-semibold text-gray-900 leading-none">{{ $title }}</h2>
            @if ($content)
                <div class="mt-4">
                    <p class="text-gray-500 leading-loose max-w-2xl">{{ $content }}</p>
                </div>
            @endif

            <div class="mt-4">
                {{ $slot }}
            </div>
        </div>
    @endif
</div>
