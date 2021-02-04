@if ($style === 'icon')
    @if ($type === 'tel')
        <a href="tel:{{ $link }}">
            <x-dynamic-component :component="'heroicon-o-phone'"
                                 class="w-{{ $size }} h-{{ $size }} {{ $attributes->get('class') }}" {{ $attributes->except('class') }} />
        </a>
    @elseif ($type === 'mail')
        <a href="mailto:{{ $link }}">
            <x-dynamic-component :component="'heroicon-o-mail'"
                                 class="w-{{ $size }} h-{{ $size }} {{ $attributes->get('class') }}" {{ $attributes->except('class') }} />
        </a>
    @else
        <div href="{{ $link }}">
            <x-dynamic-component :component="'fab-' . $type" @if ($branded) style="color: {{ \App\View\Components\Social::BRAND_COLORS[$type] }}" @endif class="w-{{ $size }} h-{{ $size }} {{ $attributes->get('class') }}" {{ $attributes->except('class') }} />
        </div>
    @endif
@elseif($style === 'text')
    <a href="{{ $link }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@endif
