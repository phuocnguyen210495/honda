@if (!$asText)
    @if ($type === 'tel')
        <a href="tel:{{ $link }}">
            <x-dynamic-component :component="'tabler-o-phone'"
                                 class="w-{{ $size }} h-{{ $size }} {{ $attributes->get('class') }}" {{ $attributes->except('class') }} />
        </a>
    @elseif ($type === 'mail')
        <a href="mailto:{{ $link }}">
            <x-dynamic-component :component="'tabler-o-mail'"
                                 class="w-{{ $size }} h-{{ $size }} {{ $attributes->get('class') }}" {{ $attributes->except('class') }} />
        </a>
    @else
        <a href="{{ $link }}">
            <x-dynamic-component :component="'fab-' . $type" {{ $attributes->merge([
                'class' => sprintf('w-%s h-%s', $size, $size),
                'style' => $branded ? sprintf('color: %s', \App\View\Components\Social::BRAND_COLORS[$type]) : ''
            ]) }} />
        </a>
    @endif
@else
    <a href="{{ $link }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@endif
