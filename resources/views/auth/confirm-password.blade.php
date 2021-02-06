<x-layout title="Login">
    <div class="flex flex-col items-center justify-center mt-6 sm:mt-24">
        <div class="max-w-lg">
            <x-title :content="__('auth.confirm-password.title')" class="text-center" level="h1"/>
            <x-paragraph :content="__('auth.confirm-password.details')" class="text-center mt-2"/>
        </div>
        <x-form action="login" class="bg-white sm:shadow-lg sm:max-w-lg w-full rounded-lg p-6 mt-8">
            <x-password name="password" :label="__('auth.confirm-password.inputs.password')"
                        first
                        placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"/>
            <x-button :content="__('auth.confirm-password.button')" class="w-full justify-center mt-6"/>
        </x-form>
    </div>
</x-layout>
