<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public static $levelToColor = [
        'success' => 'green',
        'error' => 'red',
        'warning' => 'yellow',
        'info' => 'blue',
        'neutral' => 'gray'
    ];

    public string $level;
    public string $content;
    public string $color;
    public string $href;
    public bool $dotted;
    public bool $disabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $level, string $content, bool $dotted = false, bool $disabled = false, string $href = '')
    {
        $this->level = $level;
        $this->content = $content;
        $this->color = $disabled ? 'gray' : (static::$levelToColor[$level] ?? 'gray');
        $this->dotted = $dotted;
        $this->disabled = $disabled;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.badge');
    }
}
