<?php

namespace App\View\Components;

class Year extends Input
{
    public int $start;
    public int $end;

    public function __construct(string $name = null, string $label = null, string $type = 'text', bool $hideLabel = false, string $icon = null, string $iconSet = 'heroicon', bool $first = false, string $color = null, int $start = -120, int $end = 0)
    {
        parent::__construct($name, $label, $type, $hideLabel, $icon, $iconSet, $first, $color);
        $this->start = $start;
        $this->end = $end;
    }

    public function render()
    {
        return view('components.year');
    }
}
