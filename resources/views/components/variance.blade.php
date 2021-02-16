<span class="inline-flex items-center @if (!$uncolored) @if ($variance >= 0) text-green-700 @else text-red-500 @endif @endif font-semibold">
    @if ($variance >= 0)
        <x-icon name="arrow-narrow-up" size="3.5" solid />
    @else
        <x-icon name="arrow-narrow-down" size="3.5" solid />
    @endif

    <span class="inline-block ml-1 {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>{{ $variance }}%</span>
</span>
