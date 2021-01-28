<div class="flex items-center @if(!$first) mt-4 @endif font-display font-normal text-gray-700">
    <input
        class="form-checkbox rounded border-gray-300 text-{{ $color }}-600 shadow-sm focus:border-{{ $color }}-300"
        type="checkbox" name="{{ $name }}" id="{{ $name }}" {{ old($name) ? 'checked' : '' }}>

    <label class="text-gray-700 ml-2" for="{{ $name }}">{{ $label }}</label>
</div>
