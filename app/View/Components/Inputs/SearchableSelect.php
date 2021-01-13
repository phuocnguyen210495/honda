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

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|string[] $values
     * @param string|string[] $selected
     * @param string|string[] $keys
     * @param bool $multiple
     */
    public function __construct(string $name, string $label = null, $values, $selected = null, $keys = null, bool $multiple = false)
    {
        $this->name = $name;
        $this->label = $label ?? Str::humanize($name);
        $this->values = ArrayList::make($values)->toArray();
        $this->keys = ArrayList::make($keys)->toArray();
        $this->selected = ArrayList::make($selected)->toArray();
        $this->multiple = $multiple;
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
