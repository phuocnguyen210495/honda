<div x-data="{ @alpine($checked) }">
    <x-icon
        name="star"
        x-bind:fill="checked ? 'currentColor' : 'none'"
        {{-- The space in the class is really important, do not remove  --}}
        x-bind:class="{ 'text-{{ $filledColor }}-500 ': checked, 'text-{{ $color }}-500': !checked }"
        @click="checked = !checked"
        aria-hidden="true"
    />

    <input type="checkbox" name="{{ $name }}" x-bind:checked="checked" class="hidden" aria-label="{{ $label }}"/>
</div>
