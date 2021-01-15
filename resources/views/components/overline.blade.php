<h2 class="text-{{ $size }} font-semibold tracking-wide @if ($color && $color !== 'gray') text-{{ $color }}-500 @else text-gray-800 @endif uppercase">{{ $content ?? $slot }}</h2>
