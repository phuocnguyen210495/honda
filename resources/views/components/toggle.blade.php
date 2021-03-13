<div class="inline-block @if (!$first) mt-4 @endif"
     x-data="{ @alpine($checked), disabled: {{  $attributes->hasAnyOf('disabled, readonly') ? 'true' : 'false' }} }"
     @click="if (!disabled) { checked = !checked }">

    <label for="{{ $name }}"
           x-bind:class="{ 'opacity-50': disabled, 'bg-gray-200': !checked, 'bg-{{ $color }}-600': checked, 'cursor-pointer': !disabled }"
           class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full transition-colors ease-in-out duration-200">
        @if ($name && $label)
            <span class="sr-only">{{ $label }}</span>
        @endif
        <span x-bind:class="{ 'translate-x-0': !checked, 'translate-x-5': checked }" aria-hidden="true"
              class="inline-flex items-center justify-center h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200 pointer-events-none">
            <x-icon name="x" size="3" class="text-gray-500" solid x-show="!checked"/>
            <x-icon name="check" size="3" class="text-{{ $color }}-600" solid x-show="checked"/>
        </span>
        <input @click="if (!disabled) { checked = !checked }" type="checkbox" id="{{ $name }}"
            {{ $attributes->merge([
'class' => 'absolute inset-0 sr-only'
]) }}>
    </label>
</div>


