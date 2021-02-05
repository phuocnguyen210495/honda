<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dot extends Component
{
    public string $color;
    public bool $shown;
    public bool $outline;
    public string $size;

    public function __construct(string $color, string $size = '2', bool $shown = true, bool $outline = false)
    {
        $this->color   = $color;
        $this->shown   = $shown;
        $this->outline = $outline;
        $this->size    = $size;
    }

    public function render()
    {
        return view('components.dot');
    }
}
