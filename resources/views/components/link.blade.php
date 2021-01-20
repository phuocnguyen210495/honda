<a href="{{ $href }}" class="hover:underline @if (!$unstyled) text-{{ $color }}-{{ $color === 'gray' ? '700' : '500' }} @endif font-semibold {{ $attributes->get('class') }}" {{ $attributes->except('class')}}>
    {{ $content ?? $slot }}
</a>