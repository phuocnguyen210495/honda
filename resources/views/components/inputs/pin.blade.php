<div class="flex flex-col w-full" x-data="{
            length: {{ $length }},
            resetValue(i) {
                for (x = 0; x < this.length; x++) {
                    if (x >= i) document.getElementById(`pin_${x}`).value = ''
                }
            },
            stepForward(i) {
                if (document.getElementById(`pin_${i}`).value && i != this.length - 1) {
                    document.getElementById(`pin_${i+1}`).focus()
                    document.getElementById(`pin_${i+1}`).value = ''
                }
            },
            stepBack(i) {
                if (document.getElementById(`pin_${i-1}`).value && i != 0) {
                    document.getElementById(`pin_${i-1}`).focus()
                    document.getElementById(`pin_${i-1}`).value = ''
                }
            },
            value() {
                pin = '';
                for (x = 0; x < this.length - 1; x++) {
                    pin += document.getElementById(`pin_${x}`).value    
                }
                return pin;
            }
        }">
    @if (!$hiddenLabel)
        <label for="pin_0" aria-hidden="true" class="block text-gray-800 font-medium font-display">{{ $label }}</label>
    @endif
    <div class="flex mt-2 space-x-4">
        <template x-for="(_, i) in length" :key="`pin_${i}`" hidden>
            <input :autofocus="i == 0" :id="`pin_${i}`" class="h-16 w-16 placeholder-gray-300 focus:outline-none focus:shadow-outline-{{ $color }} border rounded-lg flex items-center text-center text-3xl {{ $attributes->get('class') }}" value="" maxlength="1" max="9" min="0" inputmode="numeric" @input="if (isNaN($event.target.value)) { resetValue(i); }" @keyup="stepForward(i)" @keydown.backspace="stepBack(i)" @focus="resetValue(i)" placeholder="0" />
        </template>
    </div>
    <x-value :key="$name" x-bind:value="value()" />
</div>