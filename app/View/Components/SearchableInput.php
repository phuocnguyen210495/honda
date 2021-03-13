<?php

namespace App\View\Components;

class SearchableInput extends Input
{
    public array $values;

    public function __construct(string $name = null, string $label = null, string $type = 'text', string $icon = null, string $iconSet = 'heroicon', bool $first = false, string $color = null, array $values = [])
    {
        parent::__construct($name, $label, $type, $icon, $iconSet, $first, $color);
        $this->values = $values;
    }

    public function render()
    {
        return view('components.searchable-input');
    }
}
