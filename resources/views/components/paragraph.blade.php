@if ($markdown)
    <x-markdown :color="$color">{{ $content ?? $slot }}</x-markdown>
@else
    <p class="text-{{ $color }}-700">
        {{ $content ?? $slot }}
    </p>
@endif
