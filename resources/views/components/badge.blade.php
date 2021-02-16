<div>
    <a
        @if (!empty($href) && !$disabled) href="{{ $href }}" @endif
        {{ $attributes->class([
            "opacity-50 select-none cursor-default" => $disabled,
            "hover:bg-$color-300 focus:outline-none focus:ring-2 focus:ring-$color-500 focus:ring-offset-2" => !$disabled && !empty($href),
            "rounded-full" => isset($pill),
            "rounded-lg" => !isset($pill),
            "text-gray-500" => $color === 'gray',
            "text-$color-700" =>  $color !== 'gray',
            "inline-flex items-center px-3 text-sm py-1.5 bg-$color-200"
]) }}
    >

        @if ($icon)
            <x-icon :name="$icon" :set="$iconSet" size="3.5" solid/>
        @endif

        <span
            class="inline-block font-semibold leading-none @if ($dotted || $icon) ml-2 @endif">{{ $content ?? $slot }}</span>
    </a>
</div>
