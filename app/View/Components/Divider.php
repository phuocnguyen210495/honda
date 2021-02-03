<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Divider extends Component
{
    public ?string $label;

    public function __construct(string $label = null)
    {
        $this->label = $label;
    }

    public function render()
    {
        return view('components.divider');
    }
}
