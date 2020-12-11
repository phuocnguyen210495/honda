@if ($style === 'icon')

    @if ($type === 'tel')
            <a href="tel:{{ $link }}">
                <x-dynamic-component :component="'heroicon-o-phone'" class="w-{{ $size }} h-{{ $size }} {{ $attributes }}" />
            </a>
    @elseif ($type === 'mail')
            <a href="mailto:{{ $link }}">
                 <x-dynamic-component :component="'heroicon-o-mail'" class="w-{{ $size }} h-{{ $size }} {{ $attributes }}" />
            </a>
    @else
        <a href="{{ $link }}">
            <x-dynamic-component :component="'fab-' . $type" class="w-{{ $size }} h-{{ $size }} {{ $attributes }}" />
        </a>
    @endif

@elseif($style === 'text')

@endif