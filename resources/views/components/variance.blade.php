<span class="inline-flex items-center @if (!$uncolored) @if ($variance >= 0) text-green-500 @else text-red-500 @endif @endif font-semibold">
    @if ($variance >= 0)
        <x-icon name="chevron-up" size="4" solid />
    @else
        <x-icon name="chevron-down" size="4" solid />
    @endif

    <span class="inline-block ml-1 {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>{{ $variance }}%</span>
</span>
