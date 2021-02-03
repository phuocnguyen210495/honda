<div {{ $attributes->merge(['class' => 'relative']) }}>
    <div class="absolute inset-0 flex items-center">
        <div class="w-full border-t border-gray-300"></div>
    </div>
    <div class="relative flex justify-center">
        @if ($label)
            <span class="bg-gray-100 text-gray-500 px-2">{{ $label }}</span>
        @else
            {{ $slot }}
        @endif
    </div>
</div>
