<?php

namespace App\View\Components\Dropdown;

use App\Support\Action;
use Illuminate\View\Component;

class Link extends Component
{
    public string $content;
    public string $href;
    public string $icon;
    public string $iconSet;

    public function __construct(string $href = null, string $content = null, string $icon = null, string $iconSet = 'heroicon')
    {
        $this->content = $content;
        $this->href    = Action::guess($href);
        $this->icon    = $icon;
        $this->iconSet = $iconSet;
    }

    public function render()
    {
        return view('components.dropdown.link');
    }
}
