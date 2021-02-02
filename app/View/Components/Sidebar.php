<?php

namespace App\View\Components;

use App\Support\Navigation;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public array $items;

    public function __construct($items)
    {
        if ($items instanceof Navigation) {
            $items = $items->tree();
        }

        $this->items = $items;
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
