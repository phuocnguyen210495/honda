<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class Toggle extends Component
{
    public ?string $label;
    public ?string $name;
    public string $color;
    public bool $checked;
    public bool $disabled;
    public bool $hideLabel;

    public function __construct(string $name = null, string $label = null, bool $hideLabel = false, string $color = null, bool $checked = false, bool $disabled = false)
    {
        $this->name      = $name;
        $this->label     = $label ?? ($name === null ? $name : Str::humanize($name));
        $this->hideLabel = $hideLabel;
        $this->color     = $color ?? settings('color');
        $this->checked   = $checked;
        $this->disabled  = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.toggle');
    }
}
