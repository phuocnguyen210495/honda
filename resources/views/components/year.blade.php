@php
    $data = range(now()->addYears($start)->year, now()->addYears($end)->year)
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
