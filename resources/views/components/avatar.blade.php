<div class="relative inline-block">
    <img class="inline-block object-cover w-{{ $size }} h-{{ $size }} rounded-full {{ $attributes->get('class') }}"
         src="{{ $url() }}" {{ $attributes->except('class') }}/>

    @if ($status)
        <x-dot class="absolute bottom-0 right-0 border-2 border-white" size="3" :color="$status" />
    @endif
</div>
