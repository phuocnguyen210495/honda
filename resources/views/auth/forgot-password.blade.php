<x-layout title="Login">
    <div class="flex flex-col items-center justify-center mt-6 sm:mt-24">
        <div class="max-w-lg">
            <x-ui-title :content="__('auth.forgot-password.title')" class="text-center" level="h1"/>
            <x-ui-paragraph :content="__('auth.forgot-password.details')" class="text-center mt-2"/>
        </div>

        <x-ui-form action="password.email" class="bg-white sm:shadow-lg sm:max-w-lg w-full rounded-lg p-6 mt-8">
            @if (session('status'))
                <x-ui-alert
                    :content="session('status')"
                    type="success"
                    closeable
                />
            @endif
            <x-ui-input name="email" placeholder="jack.martin@mail.com" :label="__('auth.forgot-password.inputs.email')" :first="session('status') === null" />
            <x-ui-button class="mt-6 w-full" :content="__('auth.forgot-password.button')"/>
        </x-ui-form>
    </div>
</x-layout>
