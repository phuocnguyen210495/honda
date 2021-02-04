<x-layout title="Login">
    <div class="flex flex-col items-center justify-center mt-6 sm:mt-24">
        <div class="max-w-lg">
            <x-title :content="__('auth.register.title')" class="text-center" level="h1"/>
            <x-paragraph :content="__('auth.register.details')" class="text-center mt-2"/>
        </div>
        <x-form action="register" class="bg-white sm:shadow-lg sm:max-w-lg w-full rounded-lg p-6 mt-8">
            <x-input name="name" placeholder="Jack Martin" :label="__('auth.register.inputs.name')" first />
            <x-input name="email" placeholder="jack.martin@mail.com" :label="__('auth.register.inputs.email')"/>
            <x-password name="password" :label="__('auth.register.inputs.password')"
                        placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"/>
            <x-button :content="__('auth.register.button')" class="w-full justify-center mt-6"/>

            <x-paragraph class="mt-4 text-center">
                {{ __('auth.register.login')}}
                <x-link href="register" :content="__('auth.register.login_link')"/>
            </x-paragraph>
        </x-form>
    </div>
</x-layout>
