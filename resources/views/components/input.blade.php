<div class="@if (!$first) mt-4 @endif flex flex-col w-full"
     x-data="{ showFocusRing: false, showError: true }">
    @if (!$hiddenLabel)
        <div class="flex justify-between items-baseline">
            <label for="{{ $name }}" class="block text-gray-800 font-medium font-display">{{ $label }}</label>
            @if ($cornerHint)
                <span class="text-gray-500">{{ $cornerHint }}</span>
            @endif
        </div>
    @endif
    <div class="mt-2">
        <div class="flex items-center @if ($addonSide === 'right') flex-row-reverse @else flex-row @endif"
             x-bind:class="{ 'shadow-outline-blue rounded-lg': showFocusRing }">
            @if ($icon && !$addon)
                <div
                    class="text-gray-500 pl-4 py-2.5 border border-{{ $oppositeSide() }}-0 bg-white rounded-{{ $side() }}-lg">
                    <x-icon :name="$icon" :set="$iconSet" size="6" @click="$refs.input.focus()"/>
                </div>
            @endif

            @if ($addon)

                <div
                    @click="$refs.input.focus()"
                    x-bind:class="{ 'border-0': showFocusRing }"
                    class="flex items-center text-gray-500 px-4 py-2.5 border rounded-{{ $side() }}-lg @if ($inlineAddon) bg-white @else bg-gray-100 @endif  focus:border-gray-300 ">
                    <x-icon :name="$icon" :set="$iconSet" size="5"/>
                    <span class="inline-block @if ($icon) ml-2 @endif">{{ $addon }}</span>
                </div>
            @endif
            <input
                @if ($hiddenLabel) aria-label="{{ $label }}" @endif
            type="{{ $type }}"
                id="{{ $name }}"
                x-ref="input"
                @focusin="showFocusRing = true"
                @focusout="showFocusRing = false"
                @input="showError = false; if ($event.target.value === '') { showError = true }; {{ $attributes->get('@input') }}"
                value="{{ $attributes->get('value') ?? (!str_contains($name, 'password') ? old($name) : '' )}}"
                class="bg-white rounded-lg px-4 border font-medium placeholder-gray-700 @if ($inlineAddon || $icon) border-{{ $side() }}-0 @endif @if ($addon || $icon)  rounded-{{ $side() }}-none @endif font-display py-2.5 w-full focus:border-opacity-0 focus:outline-none {{ $attributes->get('class') }}"
                {{ $attributes->except('class', 'value', '@input') }}
            />
        </div>
    </div>

    @if ($info)
        <p class="flex items-center text-gray-500 mt-2">
            <x-icon name="information-circle" size="5"/>
            <span class="inline-block ml-2">{{ $info }}</span>
        </p>
    @endif

    @error($name)
    <p x-show="showError" class="flex items-center text-red-500 mt-2">
        <x-icon name="exclamation-circle" solid size="5"/>
        <span class="inline-block ml-2">{{ $message }}</span>
    </p>
    @enderror
</div>
