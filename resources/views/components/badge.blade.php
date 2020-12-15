<a 
    @if (!empty($href) && !$disabled) href="{{ $href }}" @endif
    class="inline-flex items-center @if($disabled) opacity-50 select-none cursor-not-allowed @elseif(!$disabled && !empty($href)) hover:bg-{{ $color }}-300 focus:outline-none focus:shadow-outline-{{ $color }} @endif rounded-lg px-3 text-sm py-1 bg-{{ $color }}-200 text-{{ $color }}-700">
    @if ($dotted)
    <span class="inline-block w-1 h-1 rounded-full bg-{{ $color }}-600"></span>
    @endif

    <span class="inline-block @if ($dotted) ml-2 @endif">{{ $content }}</span>
</div>
