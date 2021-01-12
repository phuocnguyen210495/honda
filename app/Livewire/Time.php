<?php

namespace App\Livewire;

use Livewire\Component;

class Time extends Component
{
    public string $format;
    public string $timezone;

    public function mount(string $format = 'HH:mm', string $timezone = null) {
        $this->format = $format;
        $this->timezone = $timezone ?? config('app.timezone');
    }
    
    public function render()
    {
        return view('livewire.time');
    }
}
