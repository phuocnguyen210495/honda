<a href="{{ $href }}"
   class=" @if (!$unstyled) hover:text-{{ $color }}-{{ $color === 'gray' ? '800' : '600' }} text-{{ $color }}-{{ $color === 'gray' ? '700' : '500' }}  font-semibold @endif inline-flex items-center @if ($iconSide === 'left') flex-col-reverse @endif {{ $attributes->get('class') }}" {{ $attributes->except('class')}}>
    {{ $content ?? $slot }}

    @if ($icon)
        <x-icon :name="$icon" :set="$iconSet" size="4" class="ml-1" solid/>
    @endif
</a>
