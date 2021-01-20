<x-layout title="Login">
    <div class="flex flex-col items-center justify-center mt-6 sm:mt-24">
        <div class="max-w-lg">
            <x-title :content="__('auth.login.title')" class="text-center" level="h1" />
            <x-paragraph :content="__('auth.login.details')" class="text-center mt-2" />
        </div>
        <x-form action="login" class="bg-white sm:shadow-lg sm:max-w-lg w-full rounded-lg p-6 mt-8">
            <x-input name="email" placeholder="jack.martin@mail.com" :label="__('auth.login.inputs.email')" first />
            <x-input name="password" :label="__('auth.login.inputs.password')" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" />
            <div class="flex justify-between items-center mt-6">
                <x-checkbox name="remember_me" :label="__('auth.login.remember_me')" first />
                <x-link href="password.request" :content="__('auth.login.forgot_password')" />
            </div>
            <x-button color="green" :content="__('auth.login.button')" class="w-full justify-center mt-6" />

            <x-paragraph class="mt-4 text-center">
                {{ __('auth.login.register')}}
                <x-link href="register" :content="__('auth.login.register_link')" />
            </x-paragraph>
        </x-form>
    </div>
</x-layout>
{{--<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
@csrf

<div>
    <x-label for="email" :value="__('Email')" />

    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
</div>

<div class="mt-4">
    <x-label for="password" :value="__('Password')" />

    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
</div>

<div class="block mt-4">
    <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
    </label>
</div>

<div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
        {{ __('Fo       </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
    </a>
    @endif

    rgot your password?') }}
    </a>
    @endif

    <x-button class="ml-3">
        {{ __('Login') }}
    </x-button>
</div>
</form>
</x-auth-card>
</x-guest-layout>
--}}