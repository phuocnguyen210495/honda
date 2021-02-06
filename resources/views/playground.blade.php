@php
    $items = app('navigation')
        ->add('Home', fn (\App\Support\NavigationItem $item) => $item
            ->icon('home')
            ->href('playground')
        )
@endphp
<x-layout title="Yes">
    <x-sidebar :items="$items"></x-sidebar>
</x-layout>
