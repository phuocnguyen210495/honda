<div>
    <x-buttons.text aria-haspopup="true" aria-expanded="true" x-bind:aria-expanded="open" @click="open = !open"
                    :color="$color" id="options-menu" icon="chevron-down" icon-side="right">
        {{ $content ?? $slot }}
    </x-buttons.text>
</div>
