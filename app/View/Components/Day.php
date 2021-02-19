<?php

namespace App\View\Components;

class Day extends Input
{
    public int $month;
    public bool $futureOnly;

    public function __construct(string $name = null, string $label = null, string $type = 'text', bool $hideLabel = false, string $icon = null, string $iconSet = 'heroicon', bool $first = false, string $color = null, int $month = -1, bool $futureOnly = false)
    {
        parent::__construct($name, $label, $type, $hideLabel, $icon, $iconSet, $first, $color);
        $this->month = $month === -1 ? now()->month : max(12, max(0, $month));
        $this->futureOnly = $futureOnly;
    }

    public function render()
    {
        return view('components.day');
    }
}
