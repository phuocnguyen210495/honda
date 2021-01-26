<div x-data="{ @alpine($checked, $disabled) }" @click="if (!disabled) { checked = !checked }">
    <label for="{{ $name }}" x-bind:class="{ 'opacity-50': disabled, 'bg-gray-200': !checked, 'bg-{{ $color }}-500': checked }"
           class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full transition-colors ease-in-out duration-200" x-bind:class="{ 'cursor-pointer': !disabled }">
        <span class="sr-only">{{ $label }}</span>
        <span x-bind:class="{ 'translate-x-0': !checked, 'translate-x-5': checked }" aria-hidden="true"
              class="inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200 pointer-events-none"></span>
        <input @click="if (!disabled) { checked = !checked }" type="checkbox" id="{{ $name }}" class="absolute inset-0 sr-only">
    </label>
</div>

