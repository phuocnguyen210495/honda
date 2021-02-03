<x-layout title="Reference of all installed icons">
    <div class="mx-4 lg:max-width-3xl lg:mx-auto space-y-4">
        @foreach($sets as $set => $_)
            @php(['path' => $path, 'prefix' => $prefix] = $_)
            @php($icons = collect(File::files($path))->map(function ($file) use ($prefix) {
                $iconName = pathinfo($file->getBasename(), PATHINFO_FILENAME);

                return [$iconName, $prefix];
            }))
            <div>
                <x-title level="h2" :content="Str::humanize($set)" />

                <div class="w-full grid grid-cols-8 mt-4 gap-x-4 gap-y-4">
                    @foreach($icons as $icon)
                        @php([$name, $set] = $icon)

                        <div @click="$clipboard(copy)" x-data="{ copy: '<' + `x-icon name='{{ $name }}' /> set='{{ $set }}' />`}" class="flex flex-col text-center items-center justify-center rounded-lg p-4 bg-white border shadow">
                            <x:dynamic-component :component="$set . '-' . $name" class="w-6 h-6" />
                            <span class="text-gray-700 text-sm inline-block mt-4">{{ $name }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-layout>