<div>
    @if ($title && $description)
        <h2 class="mt-4 text-2xl font-bold">{{ $title }}</h2>
        <p class="text-gray-700 mt-1">{{ $description }}</p>
    @endif

    <div class="sm:flex items-center w-full">
        <x-input first name="_" wire:model="query"
                 aria-label="{{ __('Search ' . strtolower(class_basename($model)) . '\'s records') }}"
                 placeholder="{{ __('Search ' . strtolower(class_basename($model)) . '\'s records') }}"/>
        <x-inputs.searchable-select first name="_" :aria-label="__('Results per page')" wire:model="perPage"
                                    values="10,15,25,50"/>
    </div>

    @if ($items->isEmpty())
        No results
    @else
        <div class="mt-4">
            <div class="flex flex-col">
                <div class="-my-2 no-scrollbar overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full ">
                        <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    @foreach($columns as $key)
                                        <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                            <a class="flex items-center" href=""
                                               wire:click.prevent="sortBy('{{ $key }}')">
                                                {{ $translatedColumns[$key] }}

                                                @if($sortField === $key)
                                                    @if ($sortAsc)
                                                        <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                    @else
                                                        <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M5 15l7-7 7 7"/>
                                                        </svg>
                                                    @endif
                                                @endif
                                            </a>
                                        </th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 no-scrollbar">
                                @foreach($items as $item)
                                    <tr>
                                        @foreach($columns as $_)
                                            <td x-data="{text:'{{ $item->{$_} }}', open: false}"
                                                class="px-6 py-4 @if(!in_array($_, $truncate, true)) whitespace-nowrap @endif text-gray-700">
                                                <div class="flex items-center">

                                                    @if (in_array($_, $truncate, true))
                                                        <p class="max-w-lg cursor-pointer" @click="open = !open"
                                                           x-text="open || text.length <= 50 ? text : text.substr(0, 50) + '...'"></p>
                                                    @elseif (is_bool($item->{$_}))
                                                        <input
                                                            type="checkbox" checked
                                                            disabled
                                                            class="form-checkbox rounded border-gray-300 text-{{ settings('color') }}-600 shadow-sm focus:border-{{ settings('color') }}-300"
                                                            aria-label="{{ $translatedColumns[$key] }}"
                                                            @if ($item->{$_}) checked @endif />
                                                    @elseif(in_array($_, $dates, true))
                                                        {{ $item->{$_}->isoFormat($dateFormat) }}
                                                    @elseif ($item->{$_} instanceof \Illuminate\Support\Carbon)
                                                        {{ $item->{$_}->diffForHumans() }}
                                                    @else
                                                        {{ $item->{$_} }}
                                                    @endif

                                                    @if (in_array($_, $copyable, true))
                                                        <button
                                                            class="-m-2 ml-2 rounded-lg p-2 hover:bg-gray-100"
                                                            @click="$clipboard(text)">
                                                            <svg class="w-4 h-4 text-gray-500"
                                                                 xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round"
                                                                      stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                                            </svg>
                                                        </button>
                                                    @endif
                                                </div>
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-gray-500 mt-4 sm:flex justify-between ">
                {{ $items->links('components.pagination') }}

                <div>
                    {{ __('table.total_results', [
                        'firstItem' => $items->firstItem(),
                        'lastItem' => $items->lastItem(),
                        'total' => $items->total()
                    ]) }}
                </div>
            </div>
        </div>
    @endif
</div>
