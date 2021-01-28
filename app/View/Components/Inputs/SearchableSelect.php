<?php

namespace App\View\Components\Inputs;

use App\Support\ArrayList;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class SearchableSelect extends Component
{
    public string $name;
    public array $values;
    public array $selected;
    public array $keys;
    public bool $multiple;
    public bool $searchable;
    public bool $first;
    public string $label;
    public string $color;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|string[] $values
     * @param string|null $label
     * @param string|null $color
     * @param string|string[] $selected
     * @param string|string[] $keys
     * @param bool $multiple
     * @param bool $searchable
     * @param bool $first
     */
    public function __construct(string $name, $values, string $label = null, string $color = null, $selected = null, $keys = null, bool $multiple = false, bool $searchable = false, bool $first = false)
    {
        $this->name       = $name;
        $this->label      = $label ?? Str::humanize($name);
        $this->color      = $color ?? settings('color');
        $this->values     = ArrayList::make($values)->toArray();
        $this->keys       = ArrayList::make($keys)->toArray();
        $this->selected   = ArrayList::make($selected)->toArray();
        $this->multiple   = $multiple;
        $this->searchable = $searchable;
        $this->first      = $first;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.inputs.searchable-select');
    }
}
