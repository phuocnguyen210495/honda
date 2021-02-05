@php
    if ($maxWidth !== null) {
        $widths = ['max-w-' . $maxWidth];
    }

    collect(['sm', 'md', 'lg', 'xl', '2xl'])->each(function ($breakpoint) use ($attributes, $maxWidth, &$widths) {
        $widths[] = $breakpoint . ':max-w-' . $attributes->get($breakpoint, $maxWidth);
    })
@endphp
<div {{ $attributes->merge(['class' => "m-auto " . implode(' ', $widths)]) }}>
    {{ $slot }}
</div>
