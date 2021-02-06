<div class="{{ classes(['flex flex-col', 'mt-4' => !$first]) }}">
    @if ($label !== null)
        <label class="text-gray-700" for="h-captcha-response">{{ $label }}</label>
    @endif

    <div
        class="h-captcha @if ($label) mt-2 @endif"
        data-sitekey="{{ config('services.hcaptcha.sitekey') }}"
        data-theme="{{ $theme }}"
        data-size="{{ $size }}"
        data-tabindex="{{ $tabindex }}"
    ></div>
    @error('h-captcha-response')
        <p class="flex items-center text-red-500 mt-2">
            <x-icon name="exclamation-circle" solid size="5"/>
            <span class="inline-block ml-2">{{ $message }}</span>
        </p>
    @enderror
</div>
