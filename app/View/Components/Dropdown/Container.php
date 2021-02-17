<?php

namespace App\View\Components\Dropdown;

use Illuminate\View\Component;

class Container extends Component
{
    public string $side;

    public function __construct(string $side = 'left')
    {
        $this->side = $side;
    }

    public function render()
    {
        return view('components.dropdown.container');
    }
}
