<div class="bg-{{ $convertType($type) }}-100 font-medium text-{{ $convertType($type) }}-700 p-4 rounded-lg mt-4 {{ $attributes->get('class') }}" {{ $attributes }} x-data="{ closed: false }" x-show="!closed">
    <div class="flex items-center justify-between"> 
        <div class="flex items-center">
            <x-icon name="{{ $icon }}" class="text-{{ $convertType($type) }}-500" size="6" solid />
            <p class="ml-4">{{ $content }}</p>
        </div>

        @if ($closeable)
            <button @click="closed = true">
                <x-icon name="x" size="4"  />
            </button>
        @endif
    </div>
    @if ($description)
        <p class="mt-4 max-w-lg leading-8 pl-10">
            {{ $description }}
        </p>
    @endif
</div>