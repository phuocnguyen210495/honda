<x-layout title="">
    <x-sidebar :items="app('navigation')">
        <x-slot name="header">
            <a href="#" class="hover:underline text-lg font-bold">
                Starts
            </a>
        </x-slot>
    </x-sidebar>
</x-layout>