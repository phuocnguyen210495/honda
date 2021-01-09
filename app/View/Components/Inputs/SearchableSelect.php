<?php

namespace App\View\Components\Inputs;

use App\Support\ArrayList;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchableSelect extends Component
{
    public string $name;
    public array $values;
    public ?string $selected;
    public array $keys;
    public bool $multiple;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|string[] $values
     * @param string $selected
     * @param string|string[] $keys
     * @param bool $multiple
     */
    public function __construct(string $name, $values, $selected = null, $keys = null, bool $multiple = false)
    {
        $this->name = $name;
        $this->values = ArrayList::make($values)->toArray();
        $this->keys = ArrayList::make($keys)->toArray();
        $this->selected = $selected;
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
