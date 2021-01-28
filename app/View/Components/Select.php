<?php

namespace App\View\Components;

use App\Support\ArrayList;
use Arr;

class Select extends Input
{
    public array $keys;
    public array $values;
    public array $selected;
    public bool $multiple;
    public bool $searchable;

    public function __construct(
        $values,
        string $name = null,
        string $label = null,
        string $type = 'text',
        bool $hideLabel = false,
        string $icon = null,
        string $iconSet = 'heroicon',
        bool $first = false,
        string $color = null,
        $keys = null,
        $selected = null,
        bool $multiple = false,
        bool $searchable = false
    )
    {
        parent::__construct($name, $label, $type, $hideLabel, $icon, $iconSet, $first, $color);

        $values = ArrayList::make($values)->toArray();
        $keys = ArrayList::make($keys)->toArray();

        if (Arr::isAssoc($values)) {
            $this->keys = array_keys($values);
            $this->values = array_values($values);
        } else {
            $this->keys = array_keys($keys);
            $this->values = $values;
        }

        $this->selected = ArrayList::make($selected)->toArray();
        $this->multiple = $multiple;
        $this->searchable = $searchable;
    }

    public function render()
    {
        return view('components.select');
    }
}
