<?php

namespace App\View\Components;

use App\Support\ArrayList;
use Illuminate\Support\Collection;

class Select extends Input
{
    public array $values;
    public array $selected;

    /**
     * @param array|string|Collection|null $values
     * @param string|null $name
     * @param string|null $label
     * @param string $type
     * @param string|null $icon
     * @param string $iconSet
     * @param bool $first
     * @param string|null $color
     * @param array|string|Collection|null $selected
     */
    public function __construct(
        array $values = [],
        string $name = null,
        string $label = null,
        string $type = 'text',
        string $icon = null,
        string $iconSet = 'heroicon',
        bool $first = false,
        string $color = null,
        $selected = null
    )
    {
        parent::__construct($name, $label, $type, $icon, $iconSet, $first, $color);

        $this->values = $values;
        $this->selected = ArrayList::make($selected)->toArray();
    }

    public function render()
    {
        return view('components.select');
    }
}
