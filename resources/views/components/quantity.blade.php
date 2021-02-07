<div x-data="{@alpine($min, $max, $step, $value)}"
     class="flex flex-col @if(!$first) mt-4 @endif">
    @if (!$hideLabel)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <div class="flex @if (!$hideLabel) mt-2 @endif">
        <button @click="if (value > min + step) { value -= step }"
                class="bg-white rounded-lg px-4 placeholder-gray-700 border-gray-300 font-display py-2.5 shadow-sm rounded-r-none z-10 border focus:outline-none focus:ring-2 focus:border-opacity-0 focus:ring-{{ $color }}-300">
            <x-icon name="minus" size="4" class="text-gray-700" solid/>
        </button>
        <input @if ($name) id="{{ $name }}" name="{{ $name }}" @endif x-model="value"
               @input="$nextTick(() => { if (isNaN(value)) { value = value.toString().replace(/[a-zA-Z]/g,'') } if (value > max) { value = max } if (value < min) { value = min } })"
               class="py-3 px-5 block w-full border-t border-b border-gray-300 focus:border-gray-300 shadow-sm focus:border-opacity-0 focus:outline-none focus:ring-2 focus:ring-{{ $color }}-300"
        />
        <button @click="if (value < max - step) { value = parseInt(value) + step }"
                class="bg-white rounded-lg px-4 placeholder-gray-700 border-gray-300 font-display py-2.5 shadow-sm rounded-l-none border focus:outline-none focus:ring-2 focus:border-opacity-0 focus:ring-{{ $color }}-300">
            <x-icon name="plus" size="4" class="text-gray-700" solid/>
        </button>
    </div>
</div>
