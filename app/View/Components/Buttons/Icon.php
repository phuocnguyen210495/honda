<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class Icon extends Component
{
    public string $color;
    public string $icon;
    public string $type;
    public string $iconSet;

    /**
     * @param string $color
     * @param string $icon
     * @param string $type
     * @param string $iconSet
     */
    public function __construct(string $color, string $icon, string $type = 'submit', string $iconSet = 'heroicon')
    {
        $this->color = $color;
        $this->icon = $icon;
        $this->type = $type;
        $this->iconSet = $iconSet;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.buttons.icon');
    }
}
