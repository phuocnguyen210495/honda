<div
    x-data="{@alpine($keys, $values, $selected, $multiple), open: true}"
    class="flex flex-col-reverse"
>
    <select name="{{ $name }}" id="{{ $name }}" aria-hidden="hidden" class="hidden">
        <option
            @bind(value, selected)
            @bind(text, selected)
        ></option>
    </select>

    <div class="mt-4">
        <button class="bg-white p-3 rounded text-gray-700 w-full flex items-center justify-between border"
                @click="open = !open">
            <span>Show options</span>

            <svg class="h-4 float-right fill-current text-gray-700" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                <g>
                    <path
                        d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/>
                </g>
            </svg>
        </button>
        <div class="rounded-lg border bg-white mt-4" x-show="open"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <ul>
                <li class="p-2">
                    <x-input name="search" />
                </li>
                <template x-for="(key, index) in keys" :key="index">
                    <li>
                        <p class="p-2 block text-black hover:bg-grey-light cursor-pointer">
                            <span x-text="key"></span>
                            <svg x-show="selected === key" class="float-right" xmlns="http://www.w3.org/2000/svg"
                                 width="18" height="18"
                                 viewBox="0 0 18 18">
                                <path d="M6.61 11.89L3.5 8.78 2.44 9.84 6.61 14l8.95-8.95L14.5 4z"/>
                            </svg>
                        </p>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</div>
