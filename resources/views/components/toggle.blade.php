<div>
    <label for="{{ $name }}" x-bind:class="{ 'bg-gray-200': !checked, 'bg-{{ $color }}-500': checked" class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
        <span class="sr-only">{{ $label }}</span>
        <span x-bind:class="{ 'translate-x-0': !checked, 'translate-x-5': checked}" aria-hidden="true" class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 pointer-events-none"></span>
        <input type="checkbox" id="settingToggle" class="absolute inset-0 sr-only">
    </label>
</div>