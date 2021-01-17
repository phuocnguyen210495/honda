<?php

namespace App\View\Components\Inputs;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class ToggleableIcon extends Component
{
    public string $name;
    public string $filledColor;
    public string $color;
    public ?string $label;
    public bool $checked;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $label
     * @param string $filledColor
     * @param string $color
     * @param bool $outlined
     * @param bool $checked
     */
    public function __construct(string $name, string $label = null, string $filledColor = 'yellow', string $color = 'gray', bool $outlined = false, bool $checked = false)
    {
        $this->name = $name;
        $this->label = $label ?? Str::humanize($name);
        $this->filledColor = $filledColor;
        $this->color = $color;
        $this->outlined = $outlined;
        $this->checked = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.inputs.toggleable-icon');
    }
}
