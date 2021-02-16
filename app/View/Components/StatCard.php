<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatCard extends Component
{
    public string $label;
    public int $value;
    public ?int $compare;
    public string $color;
    public ?string $icon;
    public string $iconSet;

    public function __construct(string $label, int $value, ?int $compare = null, string $color = null, string $icon = null, string $iconSet = 'heroicon')
    {
        $this->label = $label;
        $this->value = $value;
        $this->compare = $compare;
        $this->color = $color ?? settings('color');
        $this->icon =  $icon;
        $this->iconSet = $iconSet;        
    }

    public function render()
    {
        return view('components.stat-card');
    }

    public function variance(int $before, int $after): float {
        return round(($before - $after) / (($before + $after) / 2) * 100, 1);
    }
}
