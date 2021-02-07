<?php

namespace App\View\Components;

use App\Support\Action;
use Illuminate\View\Component;

class Badge extends Component
{
    public string $color;
    public ?string $content;
    public ?string $href;
    public bool $dotted;
    public bool $disabled;

    public function __construct(string $content = null, string $color = null, bool $dotted = false, bool $disabled = false, string $href = null)
    {
        $this->content  = $content;
        $this->color    = $disabled ? 'gray' : ($color ?? settings('color'));
        $this->dotted   = $dotted;
        $this->disabled = $disabled;
        $this->href     = $href !== null ? Action::guess($href) : null;
    }

    public function render()
    {
        return view('components.badge');
    }
}
