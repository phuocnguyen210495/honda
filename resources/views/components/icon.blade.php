@php
$componentName = 'heroicon-' . $type . '-' . $name;
@endphp
<x:dynamic-component :component="$componentName" {{ $attributes->merge(['class' => $width . ' ' . $height]) }} />
