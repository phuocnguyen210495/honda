<x-form :action="$action" :method="$method">
    <x-dynamic-component :component="$component" {{ $attributes }} /> 
</x-form>