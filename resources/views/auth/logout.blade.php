<x-layout title="Login">
    <div class="flex flex-col items-center justify-center mt-6 sm:mt-24">
        <div class="max-w-lg">
            <x-title :content="__('auth.logout.title')" class="text-center" level="h1"/>
            <x-paragraph :content="__('auth.logout.details')" class="text-center mt-2"/>
        </div>
        <x-form action="logout" class="sm:max-w-lg w-full mt-8">
            <x-button :content="__('auth.logout.button')" class="w-full justify-center"/>
        </x-form>
    </div>
</x-layout>
