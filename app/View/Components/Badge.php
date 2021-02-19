<?php

namespace App\View\Components;

use App\Support\Action;
use Illuminate\View\Component;

class Badge extends Component
{
    public string $color;
    public ?string $content;
    public ?string $href;
    public ?string $icon;
    public string $iconSet;
    public bool $dotted;
    public bool $disabled;

    public function __construct(string $content = null, string $color = null, bool $dotted = false, bool $disabled = false, string $href = null, string $icon = null, string $iconSet = 'heroicon')
    {
        $this->content  = $content;
        $this->color    = $disabled ? 'gray' : ($color ?? settings('color'));
        $this->icon     = $icon;
        $this->iconSet  = $iconSet;
        $this->dotted   = $dotted;
        $this->disabled = $disabled;
        $this->href     = $href !== null ? Action::guess($href) : null;
    }

    public function render()
    {
        return view('components.badge');
    }
}
