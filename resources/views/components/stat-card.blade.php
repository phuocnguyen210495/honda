<div class="bg-white rounded-lg shadow py-4 px-6 flex">
    @if ($icon)
    <div class="inline-block rounded-lg px-4 flex items-center justify-center bg-{{ $color }}-200 text-{{ $color }}-600">
        <x-icon :name="$icon" :set="$iconSet" size="7" solid />
    </div>
    @endif
    <div class="@if ($icon) ml-4 @endif flex flex-col justify-between">
        <span class="text-gray-400 text-sm">{{ $label }}</span>

        <div class="flex items-end mt-2">
            <span class="flex items-end leading-none font-semibold text-3xl text-gray-600">{{ $value }}</span>

            @if ($compare)
                <x-variance :variance="$variance($value, $compare)" />
            @endif
        </div>
    </div>
</div>