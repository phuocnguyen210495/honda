<div @if ($status) class="flex items-end" @endif>
    <img class="w-{{ $size }} h-{{ $size }} rounded-full object-cover object-center" src="{{ $url() }}" {{ $attributes }} />
    @if ($status)
        <x-dot size="2" :color="$status" class="ml-2" />
    @endif 
</div>  