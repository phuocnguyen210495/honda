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
    public bool $first;
    public bool $checked;
    public bool $disabled;

    public function __construct(string $name = null, string $label = null, string $color = null, bool $first = false, bool $checked = false, bool $disabled = false)
    {
        $this->name = $name;
        $this->label = $label ?? ($name === null ? $name : Str::humanize($name));
        $this->color = $color ?? settings('color');
        $this->first = $first;
        $this->checked = $checked;
        $this->disabled = $disabled;
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
