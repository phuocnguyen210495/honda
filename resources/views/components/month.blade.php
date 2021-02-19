@php
    $data = [];
    $date = now()->month(1);
    for ($i = 0; $i < 12; $i++) {
        $data[] = $date->monthName;
        $date->addMonth();
    }
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
