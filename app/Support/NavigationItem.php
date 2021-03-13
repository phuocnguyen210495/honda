<?php

namespace App\Support;

use App\Provider\RouteServiceProvider;

class NavigationItem
{
    public string $name;
    public ?string $href   = '#';
    public ?string $icon   = null;
    public string $iconSet = 'heroicon';
    public bool $show      = true;
    public bool $active    = false;
    public ?string $activationPattern;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function href(string $href): self
    {
        $this->href = Action::guess($href);

        return $this;
    }

    public function active(bool $condition = true): self
    {
        $this->active = $condition;

        return $this;
    }

    public function showIf(callable $condition): self
    {
        $this->show = $condition();

        return $this;
    }

    public function isActive(): bool
    {
        if ($this->active) {
            return true;
        }

        $href         = str_replace(['https://', 'http://', request()->getHost()], '', Action::guess($this->href));
        $href         = $href === '' ? '/' : $href;
        $current      = !empty($path = request()->path()) ? $path : '/';
        $isActive     = $href === $current || fnmatch($this->activationPattern ?? $href, '/' . $current);
        $this->active = $isActive;

        return $isActive;
    }

    public function activeWhenMatch(string $pattern): self
    {
        $this->activationPattern = $pattern;

        return $this;
    }

    public function showUnless(callable $condition): self
    {
        $this->show = !$condition();

        return $this;
    }

    public function inHome(): NavigationItem
    {
        $this->activationPattern = rtrim(RouteServiceProvider::HOME, '/') . '/' . ltrim($this->activationPattern, '/');

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
