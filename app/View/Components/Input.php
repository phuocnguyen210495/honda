<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class Input extends Component
{
    public string $name;
    public string $type;
    public ?string $color;
    public string $iconSet;
    public ?string $label;
    public ?string $icon;
    public ?string $addonSide;
    public ?string $cornerHint;
    public ?string $info;
    public ?string $addon;
    public bool $inlineAddon;
    public bool $first;
    public bool $hiddenLabel;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $type
     * @param string|null $label
     * @param string|null $color
     * @param string|null $icon
     * @param string $addonSide
     * @param string|null $addon
     * @param string|null $info
     * @param string|null $cornerHint
     * @param bool $hiddenLabel
     * @param bool $inlineAddon
     * @param bool $first
     */
    public function __construct(
        string $name,
        string $type = null,
        string $label = null,
        string $color = null,
        string $icon = null,
        string $addonSide = 'left',
        string $addon = null,
        string $info = null,
        string $cornerHint = null,
        bool $hiddenLabel = false,
        bool $inlineAddon = false,
        bool $first = false
    ) {
        $this->name = $name;
        $this->type = $this->resolveType($type, $name);
        $this->label = $this->resolveLabel($label, $name);
        $this->color = $color ?? settings('color');
        $this->icon = $icon;
        $this->iconSet = 'heroicon';
        $this->addonSide = $addonSide !== 'right' ? 'left' : 'right';
        $this->addon = $addon;
        $this->inlineAddon = $inlineAddon;
        $this->info = $info;
        $this->hiddenLabel = $hiddenLabel;
        $this->cornerHint = $cornerHint;
        $this->first = $first;
    }

    private function resolveType(?string $type, string $name): string
    {
        return $type ?? (in_array($name, ['email', 'password', 'search', 'url'], true) ? $name : 'text');
    }

    private function resolveLabel(?string $label, string $name): string
    {
        return $label ?? \Str::humanize($name);
    }

    public function oppositeSide(): string
    {
        return ['l' => 'r', 'r' => 'l'][$this->side()];
    }

    public function side(): string
    {
        return $this->addonSide[0];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
