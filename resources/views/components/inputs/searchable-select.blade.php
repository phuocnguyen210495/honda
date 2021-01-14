<div x-data="{@alpine($keys, $values, $selected, $multiple, $searchable), open: false, search: '', focused: false }"
     class="flex w-full flex-col-reverse" @search-input="search = $event.detail.value"
     @keydown="if (open && $event.key === 'Escape') { open = false }">
    <select name="{{ $name }}@if($multiple)[]@endif" id="{{ $name }}" class="hidden" aria-hidden="hidden"
            @if($multiple) multiple @endif>
        <template x-for="s in selected">
            <option @bind(value, s) @bind(text, s) selected></option>
        </template>
    </select>

    <div class="@if (!$first) mt-4 @endif">
        <button
            class="bg-white focus:outline-none focus:shadow-outline-blue rounded-lg text-gray-700 w-full flex items-center justify-between border"
            @click="open = !open" @focus="focused = true;" @blur="focused = false;">
            <span class="inline-block pl-4" x-show="selected.length === 0">{{ __('Search options') }}</span>
            <span class="inline-block pl-4" x-show="selected.length === 1" x-text="selected"></span>
            <ul class="flex overflow-x-auto no-scrollbar pl-4 space-x-2" x-show="selected.length > 1">
                <template x-for="s in selected" hidden>
                    <li x-text="s" class="bg-gray-100 py-0.5 px-4 rounded-lg"></li>
                </template>
            </ul>

            <div class="p-4">
                <x-icon name="selector" size="4" class="text-gray-700"/>
            </div>
        </button>
        <div @click.away="open = false;" class="rounded-lg border bg-white mt-4 shadow-md" x-show="open"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <ul>
                <li class="p-4 hidden sm:block" x-show="searchable">
                    <x-input name="search" first hiddenLabel :placeholder="__('Search an option')"/>
                </li>
                <div class="overflow-auto max-h-64 no-scrollbar focus:outline-none ">
                    <template x-for="(value, index) in values.filter(v => v.toString().includes(search))" :key="index">
                        <li @click="if (!multiple) { if (!selected.includes(value)) { selected = [value]; open = false } else { selected = []; open = false } } else { if (selected.includes(value)) { selected = selected.filter(e => e !== value) } else { selected.push(value) } }">
                            <button
                                class="p-4 w-full focus:outline-none focus:bg-gray-100 text-black hover:bg-gray-50 cursor-pointer flex justify-between rounded-lg">
                                <span x-text="value"></span>
                                <x-icon name="check" x-show="selected.includes(value)" size="5" class="text-gray-500"/>
                            </button>
                        </li>
                    </template>
                </div>
                <li x-show="values.filter(v =>  v.toString().includes(search)).length === 0">
                    <p class="p-4 pt-2 block text-black hover:bg-grey-light cursor-pointer">
                        {{ __('No results')}}
                    </p>
                </li>

            </ul>
        </div>
    </div>
</div>
