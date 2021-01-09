<div x-data="{@alpine($min, $max, $step, $value), removeIntervalId: -1, addIntervalId: -1 }"
     class="flex flex-col @if(!$first) mt-4 @endif">
    <label for="{{ $name }}">{{ $label }}</label>
    <div class="flex mt-2">
        <button @click="if (value > min + step) { value -= step }"
                @mousedown="removeIntervalId = setInterval(() => { if (value > min + step) { value -= step } }, 150)"
                @mouseup="clearInterval(removeIntervalId)"
                @blur="clearInterval(removeIntervalId)"
                @mouseleave="clearInterval(removeIntervalId)"
                class="bg-white rounded-lg px-4 font-medium placeholder-gray-700 font-display py-2.5 rounded-r-none border">
            <x-icon name="minus" size="4" class="text-gray-700" solid/>
        </button>
        <input x-model="value" type="text"
               @input="$nextTick(() => { if (isNaN(value)) { value = value.toString().replace(/[a-zA-Z]/g,'') } if (value > max) { value = max } if (value < min) { value = min } })"
               class="bg-white rounded-lg px-4 border-t border-b font-medium placeholder-gray-700 font-display py-2.5 w-full rounded-l-none rounded-r-none focus:border-opacity-0 focus:outline-none"
               name="{{ $name }}" id="{{ $name }}">
        <button @click="if (value < max - step) { value = parseInt(value) + step }"
                @mousedown="addIntervalId = setInterval(() => { if (value < max- step) { value = parseInt(value) + step } }, 150)"
                @mouseup="clearInterval(addIntervalId)"
                @blur="clearInterval(addIntervalId)"
                @mouseleave="clearInterval(addIntervalId)"
                class="bg-white rounded-lg px-4 font-medium placeholder-gray-700 font-display py-2.5 rounded-l-none border">
            <x-icon name="plus" size="4" class="text-gray-700" solid/>
        </button>
    </div>
</div>
