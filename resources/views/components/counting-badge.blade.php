@if ($alwaysShow || $count !== '0' || $slot->isNotEmpty())
    <div class="flex items-center justify-center rounded-full text-sm bg-{{ $color }}-500 text-white px-3 py-1.5">
        <span class="leading-none">{{ $count ?? $slot }}</span>
    </div>
@endif
