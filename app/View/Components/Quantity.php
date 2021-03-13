<?php

namespace App\View\Components;

class Quantity extends Input
{
    public int $min;
    public int $max;
    public int $step;

    public function __construct(string $name = null, string $label = null, string $icon = null, string $iconSet = 'heroicon', bool $first = false, string $color = null, int $min = 0, int $step = 1, int $max = 2147483647)
    {
        parent::__construct($name, $label, 'number', $icon, $iconSet, $first, $color);

        $this->step = $step;
        $this->min = $min;
        $this->max = $max;

    }

    public function render()
    {
        return view('components.quantity');
    }
}
