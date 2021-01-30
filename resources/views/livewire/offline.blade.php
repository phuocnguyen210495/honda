<div wire:offline>
    @env('production')
    <div class="absolute top-0 left-0 h-screen w-full bg-red-500 flex items-center justify-center">
        <div class="max-w-lg bg-white shadow-xl rounded-lg w-full p-8 text-gray-700">
            <h1 class="text-2xl font-bold text-gray-800  ">{{ __("You're not connected to internet.") }}</h1>
            <ul class="mt-4">
                <li class="flex items-center">
                    <x-icon size="6" name="check-circle" class="text-green-500" />
                    <span class="inline-block ml-1">{{ __('Try again later') }}</span>
                </li>
                <li class="flex items-center mt-6">
                    <x-icon size="6" name="check-circle" class="text-green-500" />
                    <span class="inline-block ml-1">{{ __('Check your network connection') }}</span>
                </li>

                <p class="mt-6">
                    {{ __('This message will disappear once you are back online, don\'t worry you shouldn\'t loose any data.')}}
            </ul>
        </div>
    </div>
    @endenv
</div>
