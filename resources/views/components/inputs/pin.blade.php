<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>

<div class="fixed inset-0 w-full h-full flex bg-blue-100 items-center justify-center">
    <div class="bg-white rounded-lg shadow p-4" x-data="app()">
        <div class="font-thin px-2 pb-4 text-lg">Enter your pin code</div>
        <div class="flex">
            <template x-for="(l,i) in pinlength" :key="`codefield_${i}`">
                <input :autofocus="i == 0" :id="`codefield_${i}`" class="h-16 w-12 border mx-2 rounded-lg flex items-center text-center font-thin text-3xl" value="" maxlength="1" max="9" min="0" inputmode="decimal" @keyup="stepForward(i)" @keydown.backspace="stepBack(i)" @focus="resetValue(i)"></input>
            </template>
        </div>
    </div>
</div>

<script type="text/javascript">
    function app() {
        return {
            pinlength: 4,
            resetValue(i) {
                for (x = 0; x < this.pinlength; x++) {
                    if (x >= i) document.getElementById(`codefield_${x}`).value = ''
                }
            },
            stepForward(i) {
                if (document.getElementById(`codefield_${i}`).value && i != this.pinlength - 1) {
                    document.getElementById(`codefield_${i+1}`).focus()
                    document.getElementById(`codefield_${i+1}`).value = ''
                }
                this.checkPin()
            },
            stepBack(i) {
                if (document.getElementById(`codefield_${i-1}`).value && i != 0) {
                    document.getElementById(`codefield_${i-1}`).focus()
                    document.getElementById(`codefield_${i-1}`).value = ''
                }
            },
            checkPin() {
                let code = ''
                for (i = 0; i < this.pinlength; i++) {
                    code = code + document.getElementById(`codefield_${i}`).value
                }
                if (code.length == this.pinlength) {
                    this.validatePin(code)
                }
            },
            validatePin(code) {
                // Check pin on server
                if (code == '1234') alert('success')
            }
        }
    }
</script>
