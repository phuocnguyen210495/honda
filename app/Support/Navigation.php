<?php

namespace App\Support;

class Navigation extends NavigationSection
{
    public function addSection(callable $configure): self
    {
        $this->tree[] = $configure(new NavigationSection);
        return $this;
    }
}
