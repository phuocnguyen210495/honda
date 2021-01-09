<?php

namespace App\View\Components\Inputs;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class Quantity extends Component
{
    public string $name;
    public string $label;
    public int $max;
    public int $min;
    public int $step;
    public int $value;
    public bool $first;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $label
     * @param int $max The default max is MySQL's integer max value
     * @param int $min
     * @param int $step
     * @param int $value
     * @param bool $first
     */
    public function __construct(string $name, int $max = 2147483647, string $label = null, int $min = 0, int $step = 1, int $value = 0, bool $first = false)
    {
        $this->name = $name;
        $this->label = $label ?? Str::humanize($name);
        $this->max = $max;
        $this->min = $min;
        $this->step = $step;
        $this->value = $value;
        $this->first = $first;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.inputs.quantity');
    }
}
