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
    :searchables="$data"
>
    @foreach($data as $year)
        <x-searchable-input-result :name="$year">
            {{ $year }}
        </x-searchable-input-result>
    @endforeach
</x-searchable-input>
