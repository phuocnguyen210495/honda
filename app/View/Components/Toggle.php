<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Str;

class Toggle extends Component
{
    public function __construct(string $name, string $label = null, string $color = null, bool $checked = false, bool $disabled= false)
    {
        $this->name = $name;
        $this->label  = $label ?? Str::humanize($name);
        $this->color = $color ?? settings('color');
        $this->checked  = $checked;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.toggle');
    }
}
