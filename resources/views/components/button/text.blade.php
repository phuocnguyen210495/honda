<button type="{{ $type }}"
    {{ $attributes->class([
"flex-row-reverse" => $iconSide === 'right',
"cursor-default" => $attributes->has('disabled'),
"bg-white flex disabled:opacity-50 items-center justify-center border border-gray-300  focus:outline-none focus:ring-2 focus:ring-$color-500 focus:ring-offset-2 text-gray-700 focus:border-opacity-0 rounded-lg py-2 px-5 transition ease-in-out duration-150"
]) }}>
    @if (!empty($icon))
        <x-icon :name="$icon" :size="5" :set="$iconSet"
                class="text-{{ $coloredIcon ? $color : 'gray' }}-600" solid />
    @endif
    <span
          class="text-md font-medium inline-block @if(!empty($icon)) {{ $iconSide === 'right' ? 'mr-3' : 'ml-3'  }} @endif">{{ $content ?? $slot }}</span>
</button>
