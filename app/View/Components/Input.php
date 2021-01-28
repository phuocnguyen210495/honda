<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Str;

class Input extends Component
{
    public ?string $name;
    public ?string $label;
    public ?string $icon;
    public bool $hideLabel;
    public string $iconSet;
    public bool $first;
    public string $type;
    public string $color;

    public function __construct(string $name = null, string $label = null, string $type = 'text', bool $hideLabel = false, string $icon = null, string $iconSet = 'heroicon', bool $first = false, string $color = null)
    {
        $this->name = $name;
        $this->label = $label ?? ($name === null ? $name : Str::humanize($name));
        $this->type = $type;
        $this->hideLabel = $hideLabel;
        $this->icon = $icon;
        $this->iconSet = $iconSet;
        $this->first = $first;
        $this->color = $color ?? settings('color');
    }

    public function render()
    {
        return view('components.input');
    }
}
