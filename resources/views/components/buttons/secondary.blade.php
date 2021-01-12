<button type="{{ $type }}" class="flex disabled:opacity-50 @if ($iconSide === 'right') flex-row-reverse @endif items-center justify-center bg-{{ $color }}-300 @if (!isset($attributes['disabled'])) hover:bg-{{ $color }}-200 active:bg-{{ $color }}-300 @else cursor-default @endif focus:outline-none focus:shadow-outline-{{ $color }} text-{{ $color }}-700 font-medium rounded-lg py-3 px-5 transition ease-in-out duration-150 {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>
    @if (!empty($icon))
        <x-icon :name="$icon" :size="5" :set="$iconSet" solid x-ref="icon" />
    @endif
    <span x-ref="content" class="text-md inline-block @if(!empty($icon)) {{ $iconSide === 'right' ? 'mr-3' : 'ml-3'  }} @endif">{{ $content ?? $slot }}</span>
</button>