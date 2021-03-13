<button type="{{ $type }}"
    {{ $attributes->class([
    "flex disabled:opacity-50 items-center justify-center bg-$color-500 focus:outline-none focus:ring-2 focus:ring-$color-500 focus:ring-offset-2 text-white rounded-lg py-2.5 px-2.5 transition ease-in-out duration-150",
    "hover:bg-$color-400 active:bg-$color-500" => !$attributes->has('disabled'),
    "pointer-events-none" => $attributes->has('disabled')
]) }}>
    <x-icon :name="$icon" :size="5" :set="$iconSet" solid />
</button>
