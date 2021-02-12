<?php

namespace Starts\Table;

class Action
{
    public string $component = 'button.icon';
    public string $icon;
    public string $iconSet = 'heroicon';
    public string $color;
    /** @var callable */
    public $executor;

    public static function create(): Action
    {
        return new static;
    }

    public function component(string $component): self
    {
        $this->component = $component;
        return $this;
    }

    public function icon(string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    public function iconSet(string $set): self
    {
        $this->iconSet = $set;
        return $this;
    }

    public function execute(callable $executor): self
    {
        $this->executor = $executor;
        return $this;
    }

    public function color(string $color): Action
    {
        $this->color = $color;
        return $this;
    }
}
