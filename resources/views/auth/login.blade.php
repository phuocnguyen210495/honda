<x-layout title="Login">
    <div class="flex flex-col items-center justify-center mt-6 sm:mt-24">
        <div class="max-w-lg">
            <x-title :content="__('auth.login.title')" class="text-center" level="h1" />
            <x-paragraph :content="__('auth.login.details')" class="text-center mt-2" />
        </div>
        <x-form action="login" class="bg-white sm:shadow-lg sm:max-w-lg w-full rounded-lg p-6 mt-8">
            <x-input name="email" placeholder="jack.martin@mail.com" :label="__('auth.login.inputs.email')" first />
            <x-password name="password" :label="__('auth.login.inputs.password')" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" />
            <div class="flex justify-between items-center mt-6">
                <x-checkbox name="remember_me" :label="__('auth.login.remember_me')" first />
                <x-link href="password.request" :content="__('auth.login.forgot_password')" />
            </div>
            <x-button :content="__('auth.login.button')" class="w-full justify-center mt-6" />

            <x-paragraph class="mt-4 text-center">
                {{ __('auth.login.register')}}
                <x-link href="register" :content="__('auth.login.register_link')" />
            </x-paragraph>
        </x-form>
    </div>
</x-layout>
