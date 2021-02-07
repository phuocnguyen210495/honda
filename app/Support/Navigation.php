<?php

namespace App\Support;

class Navigation extends NavigationSection
{
    public function addSection(callable $configure): self
    {
        $this->tree[] = $configure(new NavigationSection());

        return $this;
    }

    public function addIf(bool $condition, callable $configure): Navigation
    {
        if ($condition) {
            $configure($this);
        }

        return $this;
    }

    public function addUnless(bool $condition, callable $configure): Navigation
    {
        if (!$condition) {
            $configure($this);
        }

        return $this;
    }
}
