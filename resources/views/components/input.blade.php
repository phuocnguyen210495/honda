<div class="flex flex-col mt-4 font-medium">
    @if (!$hideLabel || $name === null)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif

    <div class="mt-2 flex items-center">
        <div class="border border-r-0 rounded-r-none rounded-lg p-3 border-gray-300">
            @if ($icon)
                <x-icon :name="$icon" :set="$iconSet"  size="6" class="text-gray-700 " solid />
            @endif
        </div>


        <input
            type="{{ $type }}"
            @if ($name) name="{{ $name }}" id="{{ $name }}" @endif
            class="py-3 px-5 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 transition ease-in-out duration-150 @if ($icon) border-l-0 rounded-l-none @endif {{ $attributes->get('class') }}"
            {{ $attributes }}
        />
    </div>
</div>
