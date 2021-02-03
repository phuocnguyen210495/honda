<?php

namespace App\View\Components;

use InvalidArgumentException;

class Checkbox extends Input
{
    public bool $checked;

    public function __construct(
        string $name = null,
        string $label = null,
        string $type = 'checkbox',
        bool $hideLabel = false,
        string $icon = null,
        string $iconSet = 'heroicon',
        bool $first = false,
        string $color = null,
        bool $checked = false
    ) {
        if ($icon) {
            throw new InvalidArgumentException('Attribute [icon] is not allowed.');
        }

        parent::__construct($name, $label, $type, $hideLabel, $icon, $iconSet, $first, $color);

        $this->checked = $checked;
    }

    public function render()
    {
        return view('components.checkbox');
    }
}
