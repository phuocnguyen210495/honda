@php
    $data = range(now()->addYears($start)->year, now()->addYears($end)->year)
@endphp

<x-searchable-input name="wait" :searchables="$data">
    @foreach($data as $year)
        <x-searchable-input-result :name="$year">
            {{ $year }}
        </x-searchable-input-result>
    @endforeach
</x-searchable-input>
