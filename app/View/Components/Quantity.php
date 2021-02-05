<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class Quantity extends Component
{
    public ?string $name;
    public ?string $label;
    public ?string $color;
    public int $max;
    public int $min;
    public int $step;
    public int $value;
    public bool $first;
    public bool $hideLabel;

    public function __construct(string $name = null, bool $hideLabel  =false, int $max = 2147483647, string $label = null, string $color = null, int $min = 0, int $step = 1, int $value = 0, bool $first = false)
    {
        $this->name      = $name;
        $this->hideLabel = $hideLabel;
        $this->label     = $label ?? ($name === null ? $name : Str::humanize($name));
        $this->max       = $max;
        $this->min       = $min;
        $this->step      = $step;
        $this->value     = $value;
        $this->first     = $first;
        $this->color     = $color ?? settings('color');
    }

    public function render()
    {
        return view('components.quantity');
    }
}
