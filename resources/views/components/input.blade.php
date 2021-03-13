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
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
            {{$attributes->class([
                 "focus:ring-$color-500 focus:border-$color-500 block w-full border-gray-300 rounded-lg",
                 'bg-gray-100' => $attributes->hasAnyOf('disabled', 'readonly'),
                 'pl-10' => $icon !==null,
                 'pl-4' => $icon === null,
            ])}}/>

        @if ($slot->isNotEmpty())
            <div class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400">
                {{ $slot }}
            </div>
        @endif
    </div>

    @if ($name)
        @error($name)
        <p class="flex items-center text-red-500 mt-2">
            <x-icon name="exclamation-circle" solid size="5"/>
            <span class="inline-block ml-2">{{ $message }}</span>
        </p>
        @enderror
    @endif
</div>
