<button type="{{ $type }}" class="flex disabled:opacity-50 @if ($iconSide === 'right') flex-row-reverse @endif items-center justify-center bg-{{ $color }}-200 @if (!isset($attributes['disabled'])) hover:bg-{{ $color }}-100 active:bg-{{ $color }}-200 @else cursor-default @endif focus:outline-none focus:ring-2 focus:ring-{{ $color }}-500 focus:ring-offset-2 text-{{ $color }}-700 rounded-lg py-3 px-5 transition ease-in-out duration-150 {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>
    @if (!empty($icon))
        <x-icon :name="$icon" :size="5" :set="$iconSet" solid x-ref="icon" />
    @endif
    <span x-ref="content" class="text-md inline-block @if(!empty($icon)) {{ $iconSide === 'right' ? 'mr-3' : 'ml-3'  }} @endif">{{ $content ?? $slot }}</span>
</button>
