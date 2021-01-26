<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Time extends Component
{
    public string $format;
    public string $timezone;

    public function mount(string $format = 'HH:mm', string $timezone = null): void
    {
        $this->format   = $format;
        $this->timezone = $timezone ?? config('app.timezone');
    }

    public function render(): View
    {
        return view('livewire.time');
    }
}
