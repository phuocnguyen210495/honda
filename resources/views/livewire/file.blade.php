<div class="w-full flex flex-col @if(!$first) mt-4 @endif">
    @if (!$hideLabel || $name === null)
        <label class="text-gray-700" for="{{ $name }}">{{ $label }}</label>
    @endif

    <div x-data="dataFileDnD()" class="relative @if (!$hideLabel && $name) mt-2 @endif">
        <input accept="*" type="file" multiple
               class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
               @change="addFiles($event)"
               @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
               @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
               @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
               title=""/>

        <div x-ref="dnd" class="flex items-center border rounded-lg bg-white w-full p-4 cursor-pointer">
            <div x-show="files.length === 0">
                <div class="inline-flex bg-white border rounded-full p-1">
                    <x-icon name="plus" size="4" class="text-gray-600"/>
                </div>

                <span
                    class="inline-block ml-4 text-gray-700">Select or drag max 1 file | PNG, JPEG, PDF | < 1024KB</span>
            </div>

            <template x-if="files.length > 0">
                <div @drop.prevent="drop($event)"
                     class="w-full"
                     @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                    <template x-for="(_, index) in Array.from({ length: files.length })">
                        <div
                            class="text-center bg-gray-100 border rounded cursor-move select-none w-full"
                            @dragstart="dragstart($event)" @dragend="fileDragging = null"
                            :class="{'border-blue-600': fileDragging == index}" draggable="true"
                            :data-index="index">
                        {{--                            <button class="z-50 p-1 bg-white rounded-bl focus:outline-none"--}}
                        {{--                                    type="button" @click="remove(index)">--}}
                        {{--                                Remove--}}
                        {{--                            </button>--}}
                        {{--                            <template x-if="files[index].type.includes('audio/')">--}}
                        {{--                                Audio--}}
                        {{--                            </template>--}}
                        {{--                            <template x-if="files[index].type.includes('application/') || files[index].type === ''">--}}
                        {{--                                Application--}}
                        {{--                            </template>--}}
                        {{--                            <template x-if="files[index].type.includes('image/')">--}}
                        {{--                                Image--}}
                        {{--                                --}}{{--                                <img--}}
                        {{--                                --}}{{--                                    class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"--}}
                        {{--                                --}}{{--                                    x-bind:src="loadFile(files[index])"/>--}}
                        {{--                            </template>--}}
                        {{--                            <template x-if="files[index].type.includes('video/')">--}}
                        {{--                                Video--}}
                        {{--                                --}}{{--                                <video--}}
                        {{--                                --}}{{--                                    class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">--}}
                        {{--                                --}}{{--                                    <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4"/>--}}
                        {{--                                --}}{{--                                </video>--}}
                        {{--                            </template>--}}

                        {{--                            <div--}}
                        {{--                                class="p-2 text-xs bg-white bg-opacity-50">--}}
                        {{--                        <span class="w-full font-bold text-gray-900 truncate"--}}
                        {{--                              x-text="files[index].name">Loading</span>--}}
                        {{--                                <span class="text-xs text-gray-900"--}}
                        {{--                                      x-text="humanFileSize(files[index].size)">...</span>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="z-40 transition-colors duration-300"--}}
                        {{--                                 @dragenter="dragenter($event)"--}}
                        {{--                                 @dragleave="fileDropping = null"--}}
                        {{--                                 :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">--}}
                        {{--                            </div>--}}
                                                </div>
                    </template>
                </div>
            </template>
        </div>

    </div>
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
        const files = createFileList([...this.files], [...e.target.files]);
        this.files = files;
        this.form.formData.files = [...files];
        }
        };
        }
    </x-script>
</div>
