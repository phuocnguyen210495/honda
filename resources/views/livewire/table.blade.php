<div>
    @if ($title && $description)
    <h2 class="mt-4 text-2xl font-bold">{{ $title }}</h2>
    <p class="text-gray-700 mt-1">{{ $description }}</p>
    @endif

    <div class="sm:flex items-center">
        <input type="text" wire:model="query" aria-label="{{ __('Search ' . strtolower(class_basename($model)) . '\'s records') }}" placeholder="{{ __('Search ' . strtolower(class_basename($model)) . '\'s records') }}" class="bg-white rounded-lg px-4 border font-display py-2.5 placeholder-gray-500 focus:border-opacity-0 focus:outline-none focus:shadow-outline-green w-full my-4" id="">
        <div>
            <select :aria-label="__('Results per page')" wire:model="perPage" class="form-select py-2.5 w-full sm:w-auto ml-4">
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
        </div>

    </div>

    @if ($items->isEmpty())
    No results
    @else
    <div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    @foreach($columns as $key)
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        <a class="flex items-center" href="" wire:click.prevent="sortBy('{{ $key }}')">
                                            {{ $translatedColumns[$key] }}

                                            @if($sortField === $key)
                                            @if ($sortAsc)
                                            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                            @else
                                            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @endif
                                            @endif
                                        </a>
                                    </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($items as $item)
                                <tr>
                                    @foreach($columns as $_)
                                    <td x-data="{text:'{{ $item->{$_} }}', open: false}" class="px-6 py-4 whitespace-no-wrap text-gray-700">
                                        <div class="items-center">

                                            @if (in_array($_, $truncate))
                                                <p class="max-w-lg bg-black h-72">  {{ $item->$_ }}</p>

                                            @if (strlen($item->$_) > 50)
                                            <button @click="open = !open" class="text-gray-400 hover:text-gray-500 ml-2 px-1 py-1 rounded-lg  flex items-center justify-center bg-gray-100">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                </svg>
                                            </button>
                                            @endif
                                            @else
                                            {{ $item->{$_} }}
                                            @endif

                                            @if (in_array($_, $copyable))
                                            <button class="-m-2 ml-2 rounded-lg p-2 hover:bg-gray-100" @click="$clipboard(text)">
                                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
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
                    'perPage' => $perPage,
                    'count' => count($items)
                ]) }}
            </div>
        </div>
    </div>
    @endif
</div>