<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class File extends Component
{
    use WithFileUploads;

    public TemporaryUploadedFile $file;
    public string $uuid = '';
    public ?string $name = null;
    public ?string $label = null;
    public ?string $default = null;
    public bool $hideLabel;
    public int $max;
    public array $ratio;

    public function mount(string $name = null, string $label = null, string $ratio = '13:18', string $default = null, bool $hideLabel = false, int $max = 2048)
    {
        $this->name = $name;
        $this->label = $label ?? ($name === null ? $name : Str::humanize($name));
        $this->ratio = explode(':', $ratio);
        $this->default = $default;
        $this->hideLabel = $hideLabel;
        $this->max = $max;
    }

    public function render()
    {
        return view('livewire.file');
    }


    public function updatedFile(): void
    {
        $this->save();
    }

    public function save(): void
    {
        $this->validate([
            'file' => 'image|max:2048'
        ]);

        $this->file->store('public/user_images');

        $this->uuid = $this->file->hashName();
    }
}
