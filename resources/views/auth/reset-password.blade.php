<x-layout title="Login">
    <div class="flex flex-col items-center justify-center mt-6 sm:mt-24">
        <div class="max-w-lg">
            <x-title :content="__('auth.reset-password.title')" class="text-center" level="h1"/>
            <x-paragraph :content="__('auth.reset-password.details')" class="text-center mt-2"/>
        </div>

        <x-form action="password.update" class="bg-white sm:shadow-lg sm:max-w-lg w-full rounded-lg p-6 mt-8">
            <x-value key="token" :value="$request->route('token')"/>
            <x-input name="email" placeholder="jack.martin@mail.com" :label="__('auth.reset-password.inputs.email')"
                     :first="session('status') === null" :value="old('email', $request->email)"/>
            <x-password name="password" :label="__('auth.reset-password.inputs.password')"
                        placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"/>
            <x-button class="w-full mt-6" :content="__('auth.reset-password.button')"/>
        </x-form>
    </div>
</x-layout>
