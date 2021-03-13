<div {{ $attributes->class(['p-4 rounded-lg shadow-sm border border-gray-300 bg-white'])}}>
    <h3 class="text-xl font-semibold text-gray-800">{{ $title }}</h3>
    @if ($description)
        <p class="{{ classes(['mt-1 text-gray-500']) }}">{{ $description }}</p>
    @endif
    @if ($slot->isNotEmpty())
        <div class="mt-4">
            {{ $slot }}
        </div>
    @endif
</div>
