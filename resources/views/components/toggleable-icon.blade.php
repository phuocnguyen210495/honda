<button x-data="{ @alpine($checked) }" class="focus:outline" @click="checked = !checked">
    <x-icon name="star" x-bind:fill="checked ? 'currentColor' : 'none'"
            x-bind:class="{ 'text-{{ $filledColor }}-500 ': checked, 'text-{{ $color }}-500': !checked }"
            aria-hidden="true"/>

    <input type="checkbox" @if ($name) name="{{ $name }}" @endif x-bind:checked="checked" class="hidden"
           aria-label="{{ $label }}"/>
</button>
