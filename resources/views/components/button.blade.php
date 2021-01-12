<button type="{{ $type }}" class="flex @if ($iconSide === 'right') flex-row-reverse @endif items-center justify-center bg-{{ $color }}-500 hover:bg-{{ $color }}-400 focus:outline-none active:bg-{{ $color }}-500 focus:shadow-outline-{{ $color }} text-white font-medium rounded-lg py-3 px-5 transition ease-in-out duration-150" {{ $attributes }}>
    @if (!empty($icon))
    @dump($solidIcon)
    <x-icon :name="$icon" :size="5" :solid="$solidIcon" :set="$iconSet" />
    @endif
    <span class="text-md inline-block @if(!empty($icon)) {{ $iconSide === 'right' ? 'mr-3' : 'ml-3'  }} @endif">{{ $content ?? $slot }}</span>
</button>