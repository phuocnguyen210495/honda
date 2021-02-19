<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    public array $items;

    public function __construct(\App\Support\Navigation $items)
    {
        $this->items = $items->tree();
    }

    public function render()
    {
        return view('components.navigation');
    }
}
