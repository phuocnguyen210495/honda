<div {{ $attributes->class([
    'p-6 rounded-lg',
    'bg-gray-200' => $well,
    'shadow bg-white shadow' => !$well
])}}>
    <h3 class="text-xl font-semibold text-gray-800" style="line-height: 1.6">{{ $title }}</h3>
    @if ($description)
        <p class="{{ classes([
            'mt-1',
            'text-gray-500' => !$well,
            'text-gray-600' => $well
        ]) }}">{{ $description }}</p>
    @endif
    <div class="mt-4">
        {{ $slot }}
    </div>
</div>