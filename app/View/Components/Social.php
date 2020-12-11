<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use InvalidArgumentException;

class Social extends Component
{
    public static array $allowedTypes = ['facebook', 'instagram', 'twitter', 'linkedin', 'tel', 'mail', 'dev.to', 'github', 'gitlab', 'discord', 'pinterest'];

    public string $type;
    public string $style;
    public string $link;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string $style
     * @param string $link
     */
    public function __construct(string $type, string $style, string $link)
    {
        $this->type = in_array($type, static::$allowedTypes, true) ? $type : $this->badValue('type', static::$allowedTypes);
        $this->style = in_array($style, ['icon', 'text']) ? $type : 'icon';
        $this->link = $link;
    }

    private function badValue(string $name, array $expected): void
    {
        throw new InvalidArgumentException("An unexpected value was given for {$name}, allowed: {$expected}");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.social');
    }
}
