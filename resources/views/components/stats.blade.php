<div>
    @if ($title)
    <x-title level="h3" :content="$title" />
    @endif

    <div class="mt-2 grid grid-cols-{{ $cols }} gap-4">
        {{ $slot }}
    </div>
</div>