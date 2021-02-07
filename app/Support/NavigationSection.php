<?php

namespace App\Support;

use stdClass;

/**
 * @method NavigationSection name(string $name)
 */
class NavigationSection
{
    public array $tree;

    public ?object $options = null;

    /**
     * @param string $name
     *
     * @return mixed|null
     */
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

    /**
     * @param string  $name
     * @param mixed[] $arguments
     *
     * @return $this
     */
    public function __call($name, $arguments): self
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
