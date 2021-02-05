<div x-data="{ stars:  new Array({{ $max }}).fill(false) }" class="flex flex-col @if (!$first) mt-4 @endif">
    @if (!$hideLabel || $name === null)
        <label class="text-gray-700" for="{{ $name }}">{{ $label }}</label>
    @endif
    <div class="@if (!$hideLabel) mt-2 @endif">
        @for($i = 0; $i < $max; $i++)
            <button @click="stars = @json($rate($i + 1))" @dblclick="stars = new Array({{ $max }}).fill(false)"
                    class="focus:outline-none">
                <template x-if="stars[{{ $i }}]">
                    <svg class="w-{{ $size }} h-{{ $size }} text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                </template>

                <template x-if="!stars[{{ $i }}]">
                    <x-icon name="star" class="text-gray-400" :size="$size"/>
                </template>
            </button>
        @endfor
    </div>

    @if ($name !== null)
        <x-value key="{{ $name }}" x-bind:value="stars.filter((_) => _ === true).length"/>
    @endif
</div>
