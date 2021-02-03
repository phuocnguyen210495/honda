<div {{ $attributes->class([
    'h-' . $height,
    'relative max-w-xl overflow-hidden',
    'rounded-full' => $squared
])}}>
    <div class="w-full h-full bg-{{ $background }}-200 absolute"></div>
    <div class="h-full bg-{{ $color }}-500 absolute" style="width: {{ $completedPercentage() }}%"></div>
</div>