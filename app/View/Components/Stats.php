<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Stats extends Component
{
    public ?string $title = null;
    public array $items;
    public int $cols;

    public function __construct(string $title = null, array $items = [], int $cols = 3)
    {
        $this->title  = $title;
        $this->items  = $items;
        $this->cols   = $cols;
    }

    public function render()
    {
        return view('components.stats');
    }
}
