<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use InvalidArgumentException;

class Social extends Component
{
    public static array $allowedTypes   = ['facebook', 'instagram', 'twitter', 'linkedin', 'tel', 'mail', 'dev', 'github', 'gitlab', 'discord'];
    public static array $convertedTypes = [
        'facebook'  => 'https://facebook.com/{link}',
        'instagram' => 'https://instagram.com/{link}',
        'twitter'   => 'https://twitter.com/{link}',
        'linkedin'  => 'https://linkedin.com/{link}',
        'dev'       => 'https://dev.to/{link}',
        'github'    => 'https://github.com/{link}',
        'gitlab'    => 'https://gitlab.com/{link}',
        'discord'   => 'https://discord.gg/{link}',
    ];

    public string $type;
    public string $style;
    public string $link;
    public int $size;

    /**
     * Create a new component instance.
     */
    public function __construct(string $type, string $link, string $style = 'icon', int $size = 8)
    {
        if (!in_array($type, static::$allowedTypes, true)) {
            throw new InvalidArgumentException('An unexpected value was given for type allowed: ' . implode(', ', static::$allowedTypes));
        }

        $this->type  = $type;
        $this->style = in_array($style, ['icon', 'text']) ? $style : 'icon';
        $this->link  = $this->buildLink($link, $type);
        $this->size  = $size;
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

    public function buildLink(string $link, string $type): string
    {
        if (in_array($type, ['tel', 'mail'])) {
            return $link;
        }

        return str_replace('{link}', $link, static::$convertedTypes[$type]);
    }
}
