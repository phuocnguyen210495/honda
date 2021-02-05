<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Container extends Component
{
    public ?string $maxWidth;

    public function __construct(string $maxWidth = null)
    {
        $this->maxWidth = $maxWidth;
    }

    public function render()
    {
        return view('components.container');
    }
}
