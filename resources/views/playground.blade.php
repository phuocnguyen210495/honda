<x-layout title="">
    <x-sidebar :items="app('navigation')
            ->add('Home', fn ($item) => $item->href('welcome')->icon('cake'))
            ->addSection(function ($section) {
                return $section
                    ->name('Billing')
                    ->add('One', fn ($item) => $item)
                    ->add('Two', fn ($item) => $item);
            })
    ">
        <x-slot name="header">
            <a href="#" class="hover:underline text-lg font-bold">
                Starts
            </a>
        </x-slot>
    </x-sidebar>
</x-layout>