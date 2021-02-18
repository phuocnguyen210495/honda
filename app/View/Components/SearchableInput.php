<?php

namespace App\View\Components;

class SearchableInput extends Input
{
    public array $searchables;

    public function __construct(string $name = null, string $label = null, string $type = 'text', bool $hideLabel = false, string $icon = null, string $iconSet = 'heroicon', bool $first = false, string $color = null, array $searchables = [])
    {
        parent::__construct($name, $label, $type, $hideLabel, $icon, $iconSet, $first, $color);
        $this->searchables = $searchables;
    }

    public function render()
    {
        return view('components.searchable-input');
    }
}
