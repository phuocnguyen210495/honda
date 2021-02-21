<x-script link="https://unpkg.com/create-file-list"/>
<x-script>
    function dataFileDnD() {
    return {
    files: [],
    fileDragging: null,
    fileDropping: null,
    humanFileSize(size) {
    const i = Math.floor(Math.log(size) / Math.log(1024));
    return (
    (size / Math.pow(1024, i)).toFixed(2) * 1 +
    " " +
    ["B", "kB", "MB", "GB", "TB"][i]
    );
    },
    remove(index) {
    let files = [...this.files];
    files.splice(index, 1);

    this.files = createFileList(files);
    },
    drop(e) {
    let removed, add;
    let files = [...this.files];

    removed = files.splice(this.fileDragging, 1);
    files.splice(this.fileDropping, 0, ...removed);

    this.files = createFileList(files);

    this.fileDropping = null;
    this.fileDragging = null;
    },
    dragenter(e) {
    let targetElem = e.target.closest("[draggable]");

    this.fileDropping = targetElem.getAttribute("data-index");
    },
    dragstart(e) {
    this.fileDragging = e.target
    .closest("[draggable]")
    .getAttribute("data-index");
    e.dataTransfer.effectAllowed = "move";
    },
    loadFile(file) {
    const preview = document.querySelectorAll(".preview");
    const blobUrl = URL.createObjectURL(file);

    preview.forEach(elem => {
    elem.onload = () => {
    URL.revokeObjectURL(elem.src); // free memory
    };
    });

    return blobUrl;
    },
    addFiles(e) {
    if (!{{ $multiple ? 'true' : 'false' }} && this.files.length > 0) {
    const files = createFileList(e.target.files[0]);
    this.files = files;
    return;
    }

    const files = [...this.files, ...e.target.files].filter(file => file.size / 1024 <= {{ $max }});
    this.files = createFileList(files);
    }
    };
    }
</x-script>
<div class="w-full flex flex-col @if(!$first) mt-4 @endif">
    @if (!$hideLabel || $name === null)
        <label class="text-gray-700" for="{{ $name }}">{{ $label }}</label>
    @endif

    <div x-data="dataFileDnD()" class="relative @if (!$hideLabel && $name) mt-2 @endif">
        <input @if ($name) id="{{ $name }}" name="{{ $name }}" @endif  accept="{{ implode(',', $mimes) }}" type="file"
               @if ($multiple) multiple @endif
               class="absolute top-0 w-full h-14 p-0 m-0 outline-none cursor-pointer opacity-0"
               @change="addFiles($event)"
               @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
               @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
               @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
               title=""/>
        <div x-ref="dnd" class="flex items-center border rounded-lg bg-white w-full p-4 cursor-pointer">
            <div class="inline-flex bg-white border rounded-full p-1">
                <x-icon name="plus" size="4" class="text-gray-600"/>
            </div>

            <span
                class="inline-block ml-4 text-gray-700">Select or drag @if (!$multiple) max 1 file @else files @endif  | {{ collect($extensions)->mapWithoutKeys('strtoupper')->implode(", ") }} | < {{ $max / 1024 }}MO</span>
        </div>

        <template x-if="files.length > 0">
            <div class="flex z-50 items-center border rounded-lg bg-white w-full p-4 cursor-pointer mt-2">
                <div @drop.prevent="drop($event)"
                     class="w-full space-y-4"
                     @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                    <template x-for="(_, index) in Array.from({ length: files.length })" hidden>
                        <div
                            class="flex"
                            @dragstart="dragstart($event)" @dragend="fileDragging = null"
                            :class="{'border-blue-600': fileDragging == index}" draggable="true"
                            :data-index="index">

                            <template
                                x-if="!files[index].type.includes('video/') && !files[index].type.includes('image/')"
                                hidden>
                                <div class="w-24 h-20 border rounded-lg flex items-center justify-center p-4">
                                    <x-icon name="document-text" size="8" class="text-gray-500"/>
                                </div>
                            </template>
                            <template x-if="files[index].type.includes('video/')" hidden>
                                <video
                                    class="w-24 object-cover object-center rounded-lg preview">
                                    <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4"/>
                                </video>
                            </template>
                            <template x-if="files[index].type.includes('image/')" hidden>
                                <img
                                    class="w-24 max-h-36 object-cover object-center rounded-lg preview"
                                    x-bind:src="loadFile(files[index])"/>
                            </template>
                            <div class="flex flex-col ml-4 justify-between text-gray-500">
                                <x-overline x-text="files[index].name.split('.').slice(-1)[0]" content="..."/>
                                <span x-text="files[index].name" class="truncate">Loading</span>
                                <span x-text="humanFileSize(files[index].size)">...</span>

                                <button
                                    class="text-sm underline inline-flex justify-start w-auto focus:outline-none focus:text-gray-600 hover:text-gray-600"
                                    type="button" @click="remove(index)">
                                    Remove
                                </button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </template>

    </div>

    @if ($name)
        @error($name)
        <p class="flex items-center text-red-500 mt-2">
            <x-icon name="exclamation-circle" solid size="5"/>
            <span class="inline-block ml-2">{{ $message }}</span>
        </p>
        @enderror
    @endif
</div>
