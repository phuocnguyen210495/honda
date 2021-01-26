<?php

namespace App\View\Components;

use App\Support\Action;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    public string $content;
    public string $href;
    public string $color;
    public bool $unstyled;
    public ?string $icon;
    public string $iconSide;
    public string $iconSet;

    public function __construct(string $content = null, string $href = null, string $color = null, bool $unstyled = false, string $icon = null, string $iconSet = 'heroicon', string $iconSide = 'right')
    {
        $this->content  = $content;
        $this->href     = Action::guess($href);
        $this->color    = $color ?? settings('color');
        $this->unstyled = $unstyled;
        $this->icon     = $icon;
        $this->iconSet  = $iconSet;
        $this->iconSide = $iconSide;
    }

    public function render(): View
    {
        return view('components.link');
    }
}
