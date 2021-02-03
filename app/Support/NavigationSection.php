<?php

namespace App\Support;

use stdClass;

class NavigationSection
{
    public array $tree;

    public ?object $options = null;

    public function __get($name)
    {
        if (!$this->options) {
            return null;
        }

        if (!isset($this->options->{$name})) {
            return null;
        }

        return $this->options->{$name};
    }

    public function options(array $options): self
    {
        $this->options = (object) $options;

        return $this;
    }

    public function __call($name, $arguments)
    {
        if (!$this->options) {
            $this->options = new stdClass();
        }

        $this->options->{$name} = $arguments[0];

        return $this;
    }

    public function add(string $name, ?callable $configure = null): self
    {
        $item = new NavigationItem($name);

        if ($configure) {
            $item = $configure($item);
        }

        $this->tree[] = $item;

        return $this;
    }

    public function tree(): array
    {
        return $this->tree;
    }
}
