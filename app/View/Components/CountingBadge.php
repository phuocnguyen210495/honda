<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CountingBadge extends Component
{
    public bool $alwaysShow;
    public string $count;
    public string $color;

    public function __construct(string $count = '0', string $color = 'gray', bool $alwaysShow = false)
    {
        $this->count      = $count;
        $this->color      = $color;
        $this->alwaysShow = $alwaysShow;
    }

    public function render()
    {
        return view('components.counting-badge');
    }

    public function shouldRender(): bool
    {
        return $this->alwaysShow || $this->count !== '0';
    }
}
