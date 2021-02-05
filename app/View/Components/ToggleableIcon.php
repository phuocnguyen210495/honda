<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class ToggleableIcon extends Component
{
    public ?string $name;
    public ?string $label;
    public string $filledColor;
    public string $color;
    public bool $checked;
    public bool $hideLabel;

    public function __construct(string $name = null, string $label = null, bool $hideLabel = false, string $filledColor = null, string $color = 'gray', bool $checked = false)
    {
        $this->name        = $name;
        $this->label       = $label ?? ($name === null ? $name : Str::humanize($name));
        $this->hideLabel   = $hideLabel;
        $this->filledColor = $filledColor ?? settings('color');
        $this->color       = $color;
        $this->checked     = $checked;
    }

    public function render()
    {
        return view('components.toggleable-icon');
    }
}
