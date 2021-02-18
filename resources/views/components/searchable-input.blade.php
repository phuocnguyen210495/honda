<div class="w-full flex flex-col @if(!$first) mt-4 @endif"
     x-data="{ showFocusRing: false,  search: '{{ $attributes->get('value') }}', open: false, @alpine($searchables) }"
     @keydown.escape.window="open = false"
     @click.away="open = false"
>
    @if (!$hideLabel || $name === null)
        <label class="text-gray-700" for="{{ $name }}">{{ $label }}</label>
    @endif

    <div class="@if (!$hideLabel) mt-2 @endif flex items-center rounded-lg"
         x-bind:class="{ 'ring ring-{{ $color }}-200': showFocusRing }">
        @if ($icon)
            <div class="border rounded-r-none rounded-lg p-3 border-gray-300">
                <x-icon :name="$icon" :set="$iconSet" size="6" class="text-gray-400" solid/>
            </div>
        @endif

        <input @focus="showFocusRing = true; open = true;" @blur="showFocusRing = false" type="{{ $type }}"
               @if ($name) name="{{ $name }}" id="{{ $name }}"
               @endif class="py-3 px-5 block w-full rounded-lg border-gray-300 focus:border-gray-300 shadow-sm focus:border-opacity-0 focus:ring-0 @if ($icon) border-l-0 rounded-l-none @endif {{ $attributes->get('class') }}"
               {{ $attributes->except('class') }} x-model="search"/>
    </div>
    <div
        class="focus:outline-none overflow-auto max-h-64 no-scrollbar rounded-lg border border-gray-300 divide-y bg-white mt-4 shadow w-full z-50"
        x-show="open && !searchables.map(_ => _.toString()).includes(search)" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        {{ $slot }}
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
