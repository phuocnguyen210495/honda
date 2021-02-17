<div>
    <div class="mt-4" x-data="{}">
        @if (!$hideLabel)
            <span class="inline-block text-gray-800 font-medium font-display">{{ $label }}</span>
        @endif

        <div class="mt-2">
            @if ($file)
                <img @click="$refs.fileDialogOpener.click()" src="{{ $file->temporaryUrl() }}" alt=""
                     class="rounded-lg"/>
            @elseif($default)
                <img @click="$refs.fileDialogOpener.click()" src="/storage/user_images/{{ $default }}" alt=""
                     class="rounded-lg"/>
            @else
                <div class="flex items-center border rounded-lg bg-white w-full p-4">
                    <div class="inline-flex bg-white border rounded-full p-1">
                        <x-icon name="plus" size="4" class="text-gray-600"/>
                    </div>

                    <span
                        class="inline-block ml-4 text-gray-700">Select or drag max 1 file | PNG, JPEG, PDF | < 1024KB</span>
                </div>
            @endif
        </div>
        {{--
        TODO: https://forum.laravel-livewire.com/t/how-to-achieve-a-drag-drop-file-upload-using-livewire/818/5
        --}}
        @if ($name)
            @error($name)
            <p class="flex items-center text-red-500 mt-2">
                <x-icon name="exclamation-circle" solid size="5"/>
                <span class="inline-block ml-2">{{ $message }}</span>
            </p>
            @enderror
        @endif

        <label x-ref="fileDialogOpener" class="hidden">
            <input type='file' class="hidden" wire:model="file"/>
        </label>
    </div>
    <x:value key="{{ $name }}" value="{{ empty($uuid) ? $default : $uuid }}"/>
</div>
