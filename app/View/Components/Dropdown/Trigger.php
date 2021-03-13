<?php

namespace App\View\Components\Dropdown;

use Illuminate\View\Component;

class Trigger extends Component
{
    public string $iconSet;
    public string $iconSide;
    public string $color;
    public ?string $content;
    public ?string $icon;
    public bool $iconOnly;

    public function __construct(string $content = null, bool $iconOnly = false, string $color = null, string $icon = null, string $iconSet = 'heroicon', string $iconSide = 'right')
    {
        $this->content = $content;
        $this->iconOnly = $iconOnly;
        $this->color = $color ?? settings('color');
        $this->icon = $icon;
        $this->iconSet = $iconSet;
        $this->iconSide = $iconSide;
    }

    public function render()
    {
        return view('components.dropdown.trigger');
    }
}
