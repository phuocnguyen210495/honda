@php
    $componentName = $set . '-' . $name
@endphp
<x:dynamic-component :component="$componentName" {{ $attributes->merge(['class' => $width . ' ' . $height]) }} />
