@if ($items->isEmpty())
    No results
@else
    <div class="mt-4">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                            <tr>
                                @foreach($columns as $key)
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        {{ $key }}
                                    </th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody
                                class="bg-white divide-y divide-gray-200">
                            @foreach($items as $item)
                                <tr>
                                    @foreach($columns as $_)
                                        <td class="px-6 py-4 whitespace-no-wrap text-gray-700">
                                            {{ $item->{$_} }}
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
        </div>
    </div>
@endif
