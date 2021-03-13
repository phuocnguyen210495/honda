<button type="{{ $type }}"
    {{ $attributes->class([
    "flex items-center justify-center bg-$color-500 disabled:opacity-50 focus:outline-none focus:ring-2 focus:ring-$color-500 focus:ring-offset-2 text-white rounded-lg py-2 px-5 transition ease-in-out duration-150",
    "flex-row-reverse" => $iconSide === 'right',
    "hover:bg-$color-400 active:bg-$color-500" => !$attributes->has('disabled'),
    "pointer-events-none" => $attributes->has('disabled'),
]) }}
>
    @if (!empty($icon))
        <x-icon :name="$icon" :size="5" :set="$iconSet" solid />
    @endif
    <span class="text-md font-semibold inline-block @if(!empty($icon)) {{ $iconSide === 'right' ? 'mr-3' : 'ml-3'  }} @endif">{{ $content ?? $slot }}</span>
</button>
