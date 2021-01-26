<?php

namespace App\Support;

use ArrayIterator;
use Countable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;
use IteratorAggregate;

class ArrayList implements Arrayable, IteratorAggregate, Countable
{
    public array $list;

    /**
     * @param Collection|array|string|null $list
     */
    public function __construct($list = null)
    {
        if ($list === null) {
            $converted = [];
        } elseif (is_array($list)) {
            $converted = $list;
        } elseif ($list instanceof Collection) {
            $converted = $list->toArray();
        } elseif (!str_contains($list, ',')) {
            $converted = [$list];
        } else {
            $converted = collect(
                explode(',', $list)
            )->map(fn ($v) => trim($v))->all();
        }

        $this->list = $converted;
    }

    /**
     * @param Collection|array|string|null $list
     *
     * @return ArrayList
     */
    public static function make($list = null): self
    {
        return new static($list);
    }

    public function __toString(): string
    {
        return implode(',', $this->list);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return $this->list;
    }

    public function toCollection(): Collection
    {
        return collect($this->list);
    }

    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        return new ArrayIterator($this->list);
    }

    /**
     * {@inheritDoc}
     */
    public function count()
    {
        return count($this->list);
    }
}
