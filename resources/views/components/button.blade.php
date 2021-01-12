<button class="flex @if ($iconSide === 'right') flex-row-reverse @endif items-center justify-center bg-{{ $color }}-500 hover:bg-red-400 focus:outline-none active:bg-{{ $color }}-500 focus:shadow-outline-{{ $color }} text-white font-medium rounded-lg {{ $paddings() }} transition ease-in-out duration-150" {{ $attributes }}>
    <x-icon :name="$icon" :size="$iconSize()" :set="$iconSet" />
    <span class="inline-block @if(!empty($icon)) {{ $iconSide === 'right' ? 'mr-2' : 'ml-2'  }} @endif">{{ $content ?? $slot }}</span>
</button>