<div class="w-full @if (!$first) mt-4 @endif">
    @if ($name && $label)
        <label for="{{ $name }}" class="block  font-medium text-gray-700">{{ $label }}</label>
    @endif
    <div class="@if ($name && $label) mt-1 @endif relative rounded-lg shadow-sm">
        @if ($icon)
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <span class="text-gray-500">
                   <x-icon :name="$icon" :set="$iconSet" size="5" class="text-gray-400" solid/>
              </span>
            </div>
        @endif
        <select name="{{ $name }}" id="{{ $name }}" {{ $attributes->class([
    "block w-full mt-1 rounded-lg focus:ring-$color-500 focus:border-$color-500 block w-full border-gray-300 rounded-lg text-gray-500",
        'bg-gray-100 pointer-events-none' => $attributes->hasAnyOf('disabled', 'readonly'),
    'pl-10' => $icon !== null,
    'pl-4' => $icon === null
]) }}>
            @foreach($values as $k => $v)
                <option value="{{ $k }}" @if (in_array($k, $selected)) selected @endif>{{ $v }}</option>
            @endforeach
        </select>
    </div>


</div>
