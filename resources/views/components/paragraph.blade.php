@if ($markdown)
    <x-markdown :color="$color" {{ $attributes }}>{{ $content ?? $slot }}</x-markdown>
@else
    <p {{ $attributes->merge(['class' => 'text-' . $color . '-700']) }}>{{ $content ?? $slot }}</p>
@endif
