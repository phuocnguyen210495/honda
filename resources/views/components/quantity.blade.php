<div>
    <x-input
        type="number"
        pattern="[0-9]+"
        autocomplete="off"
        :min="$min"
        :max="$max"
        :step="$step"
        :name="$name"
        :label="$label"
        :icon="$icon"
        :iconSet="$iconSet"
        :first="$first"
        :color="$color"
        {{ $attributes }}
    />
</div>
