<div x-data="{}" class="flex flex-col items-center justify-center mt-6 sm:mt-24" wire:poll.keep-alive="checkForVerification">
    <div class="max-w-lg">
        <x-ui-title :content="__('auth.verify-email.title')" class="text-center" level="h1"/>
        <x-ui-paragraph :content="__('auth.verify-email.details')" class="text-center mt-2"/>
    </div>

    <x-ui-spinner size="12" class="mt-6"/>

    <span content="Resend" class="mt-4 text-{{ settings('color') }}-500 font-semibold cursor-pointer"
          @click="$event.target.innerText = '{{ __('auth.verify-email.sent') }}'; $wire.sendVerificationMail()">
        {{ __('auth.verify-email.resend') }}
    </span>
</div>
