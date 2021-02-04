<div class="bg-{{ $convertType($type) }}-100 text-{{ $convertType($type) }}-700 p-4 rounded-lg {{ $attributes->get('class') }}" {{ $attributes }} x-data="{ closed: false }" x-show="!closed">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <x-icon name="{{ $icon }}" class="text-{{ $convertType($type) }}-500" size="6" solid/>
            <p class="ml-4 @if ($description) font-semibold @endif">{{ $content }}</p>
        </div>

        @if ($closeable)
            <button @click="closed = true" class="focus:outline-none focus:bg-{{ $convertType($type) }}-200 hover:bg-{{ $convertType($type) }}-200 rounded-lg p-2 -m-2">
                <x-icon name="x" size="4"  />
            </button>
        @endif
    </div>
    @if ($description)
        <p class="mt-2 max-w-lg leading-8 pl-10">
            {{ $description }}
        </p>
    @endif
</div>
