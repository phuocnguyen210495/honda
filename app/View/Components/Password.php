<?php

namespace App\View\Components;

class Password extends Input
{
    public function __construct(
        string $name = null,
        string $label = null,
        string $type = 'password',
        bool $hideLabel = false,
        string $icon = null,
        string $iconSet = 'heroicon',
        bool $first = false,
        string $color = null
    )
    {
        parent::__construct($name, $label, $type, $hideLabel, $icon, $iconSet, $first, $color);
    }

    public function render()
    {
        return view('components.password');
    }
}
