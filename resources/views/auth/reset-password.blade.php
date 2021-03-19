<x-layout title="Login">
    <div class="flex flex-col items-center justify-center mt-6 sm:mt-24">
        <div class="max-w-lg">
            <x-ui-title :content="__('auth.reset-password.title')" class="text-center" level="h1"/>
            <x-ui-paragraph :content="__('auth.reset-password.details')" class="text-center mt-2"/>
        </div>

        <x-ui-form action="password.update" class="bg-white sm:shadow-lg sm:max-w-lg w-full rounded-lg p-6 mt-8">
            <x-ui-value key="token" :value="$request->route('token')"/>
            <x-ui-input name="email" placeholder="jack.martin@mail.com" :label="__('auth.reset-password.inputs.email')"
                     :first="session('status') === null" :value="old('email', $request->email)"/>
            <x-ui-password name="password" :label="__('auth.reset-password.inputs.password')"
                        placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"/>
            <x-ui-button class="w-full mt-6" :content="__('auth.reset-password.button')"/>
        </x-ui-form>
    </div>
</x-layout>
