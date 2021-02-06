<?php

namespace App\View\Components;

use App\Support\Navigation;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public array $items;

    public function __construct(Navigation $items)
    {
        $this->items = $items->tree();
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
