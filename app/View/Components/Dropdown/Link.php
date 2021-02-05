<?php

namespace App\View\Components\Dropdown;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function render()
    {
        return view('components.dropdown.link');
    }
}
