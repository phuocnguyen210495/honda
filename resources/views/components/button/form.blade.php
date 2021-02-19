<x-form :action="$action" :method="$method">
    <x-dynamic-component :component="$extends" {{ $attributes }} />
</x-form>
