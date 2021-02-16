<div>
    <a
        @if (!empty($href) && !$disabled) href="{{ $href }}" @endif
    class="inline-flex items-center @if($disabled) opacity-50 select-none cursor-default @elseif(!$disabled && !empty($href)) hover:bg-{{ $color }}-300 focus:outline-none focus:ring-2 focus:ring-{{ $color }}-500 focus:ring-offset-2 @endif @if (isset($pill)) rounded-full @else rounded-lg @endif px-3 text-sm py-1.5 bg-{{ $color }}-200 @if ($color === 'gray') text-gray-500 @else text-{{ $color }}-700 @endif">

        @if ($icon)
            <x-icon :name="$icon" :set="$iconSet" size="3.5" solid  />
        @endif

        <span
            class="inline-block font-semibold leading-none @if ($dotted || $icon) ml-2 @endif">{{ $content ?? $slot }}</span>
    </a>
</div>
