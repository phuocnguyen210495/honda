@php
    use App\Support\NavigationItem;use App\Support\NavigationSection;$items = app('navigation')
        ->add('Home', fn (NavigationItem $item) => $item
            ->icon('home')
            ->href('playground')
        )
        ->addSection(function (NavigationSection $section) {
            return $section
                ->name('More')
               ->add('Home')
               ->add('Support & contact')
               ->add('Documentation')
               ->add('Privacy Policy')
               ->add('Terms of Service')
               ->add('Security');
        })
@endphp
<x-layout title="Yes">
    <x-sidebar :items="$items"></x-sidebar>
</x-layout>
