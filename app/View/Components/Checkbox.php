<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class Checkbox extends Component
{
    public string $name;
    public string $color;
    public ?string $label;
    public bool $first;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $color = null, ?string $label = null, bool $first = false)
    {
        $this->name  = $name;
        $this->color = $color ?? settings('color');
        $this->label = $label ?? Str::humanize($name);
        $this->first = $first;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.checkbox');
    }
}
