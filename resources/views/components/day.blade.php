@php
    $data = array_map(
        fn ($d) => $d->day,
        now()->startOfMonth()->daysUntil(
            now()->endOfMonth()
        )->toArray()
    )
@endphp

<x-searchable-input
    :name="$name"
    :label="$label"
    :type="$type"
    :hideLabel="$hideLabel"
    :icon="$icon"
    :icon-set="$iconSet"
    :first="$first"
    :color="$color"
    :searchables="$data"/>
