<?php

namespace App\Support;

class NavigationItem
{
    public string $name;
    public ?string $href   = '#';
    public ?string $icon   = null;
    public string $iconSet = 'heroicon';
    public bool $show      = true;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function href(string $href): self
    {
        $this->href = Action::guess($href);

        return $this;
    }

    public function showIf(callable $condition): self
    {
        $this->show = $condition();

        return $this;
    }

    public function showUnless(callable $condition): self
    {
        $this->show = !$condition();

        return $this;
    }

    public function icon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function iconSet(string $iconSet): self
    {
        $this->iconSet = $iconSet;

        return $this;
    }
}
