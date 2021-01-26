<span
    class="inline-block w-{{ $size }} h-{{ $size }} bg-{{ $color }}-500 rounded-full @if ($outline) ring ring-8 ring-{{ $color }}-200 @endif {{ $attributes->get('class') }}" {{ $attributes->except('class') }}></span>
