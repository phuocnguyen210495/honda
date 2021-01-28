<a href="{{ $href }}"
   class="hover:text-{{ $color }}-{{ $color === 'gray' ? '800' : '600' }} @if (!$unstyled) text-{{ $color }}-{{ $color === 'gray' ? '700' : '500' }} @endif font-semibold inline-flex items-center @if ($iconSide === 'left') flex-col-reverse @endif {{ $attributes->get('class') }}" {{ $attributes->except('class')}}>
    {{ $content ?? $slot }}

    @if ($icon)
        <x-icon :name="$icon" :set="$iconSet" size="4" class="ml-1" solid/>
    @endif
</a>
