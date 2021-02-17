<div aria-haspopup="true" aria-expanded="true" x-bind:aria-expanded="open" @click="open = !open" class="text-gray-500">
    @if ($icon)
        <button type="button"
                class="focus:outline-none hover:text-gray-600 focus:text-gray-600 rounded-lg text-{{ $iconSide }}">
            <x-icon :name="$icon" :set="$iconSet" size="6"/>
        </button>
    @elseif ($slot->isNotEmpty())
        {{ $slot }}
    @else
        <x-button.text :color="$color" icon="chevron-down" icon-side="right" {{ $attributes }}>
            {{ $content ?? $slot }}
        </x-button.text>
    @endif
</div>
