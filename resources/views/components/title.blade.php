@switch($level)
    @case($level === 'h1')
    <h1 class="text-4xl font-extrabold @if ($color && $color !== 'gray') text-{{ $color }}-500 @else text-gray-800 @endif {{ $attributes->get('class') }}" style="line-height: 1.11111111" {{ $attributes->except('class') }}>{{ $content ?? $slot }}</h1>
    @break
    @case($level === 'h2')
    <h2 class="text-2xl font-bold @if ($color && $color !== 'gray') text-{{ $color }}-500 @else text-gray-800 @endif {{ $attributes->get('class') }}" style="line-height: 1.3333333" {{ $attributes->except('class') }}>{{ $content ?? $slot }}</h2>
    @break
    @case($level === 'h3')
    <h3 class="text-xl font-bold @if ($color && $color !== 'gray') text-{{ $color }}-500 @else text-gray-800 @endif {{ $attributes->get('class') }}" style="line-height: 1.6" {{ $attributes->except('class') }}>{{ $content ?? $slot }}</h3>
    @break
    @case($level === 'h4')
    <h4 class="font-bold @if ($color && $color !== 'gray') text-{{ $color }}-500 @else text-gray-800 @endif leading-6 {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>{{ $content ?? $slot }}</h4>
    @break
    @case($level === 'h5')
    <h5 class="@if ($color && $color !== 'gray') text-{{ $color }}-500 @else text-gray-800 @endif {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>{{ $content ?? $slot }}</h5>
    @break
    @case($level === 'h6')
    <h6 class="@if ($color && $color !== 'gray') text-{{ $color }}-500 @else text-gray-800 @endif {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>{{ $content ?? $slot }}</h6>
    @break
@endswitch
