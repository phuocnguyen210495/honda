<div class="flex items-center @if(!$first) mt-4 @endif font-display font-normal text-gray-700">
    <input class="form-checkbox focus:shadow-outline-{{ $color }} text-{{ $color }}-500" type="checkbox" name="{{ $name }}" id="{{ $name }}" {{ old($name) ? 'checked' : '' }}>

    <label class="text-gray-700 ml-2" for="{{ $name }}">{{ $label }}</label>
</div>
 