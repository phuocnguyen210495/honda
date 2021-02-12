<button type="{{ $type }}"
        class="bg-white flex disabled:opacity-50 @if ($iconSide === 'right') flex-row-reverse @endif items-center justify-center border border-gray-400 @if (isset($attributes['disabled'])) cursor-default @endif focus:outline-none focus:ring-2 focus:ring-{{ $color }}-500 focus:ring-offset-2 text-gray-700 focus:border-opacity-0 rounded-lg py-3 px-5 transition ease-in-out duration-150 {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>
    @if (!empty($icon))
        <x-icon :name="$icon" :size="5" :set="$iconSet"
                class="text-{{ $coloredIcon ? $color : 'gray' }}-600" solid x-ref="icon"/>
    @endif
    <span x-ref="content"
          class="text-md font-semibold inline-block @if(!empty($icon)) {{ $iconSide === 'right' ? 'mr-3' : 'ml-3'  }} @endif">{{ $content ?? $slot }}</span>
</button>
