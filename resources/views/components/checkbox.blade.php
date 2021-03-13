<div class="flex items-center @if(!$first) mt-4 @endif font-display text-gray-700">
    <input
        class="rounded border-gray-300 text-{{ $color }}-600 shadow-sm focus:ring-{{ $color }}-500
         focus:border-{{ $color }}-300 {{ $attributes->get('class') }}"
        type="checkbox" name="{{ $name }}"
        id="{{ $name }}"
        {{ old($name) ? 'checked' : '' }} {{ $attributes->except('class') }} @if ($checked) checked @endif />

    <label class="text-gray-700 ml-2" for="{{ $name }}">{{ $label }}</label>
</div>
