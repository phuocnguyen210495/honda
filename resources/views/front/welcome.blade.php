<x-layout title="Welcome" description="My description" class="">
    @php
        $a = true;
        $b = [1, "a'"]
    @endphp

    @alpine($a, $b)
</x-layout>
