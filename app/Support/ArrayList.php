<?php


namespace App\Support;

use ArrayIterator;
use Countable;
use Illuminate\Contracts\Support\Arrayable;
use IteratorAggregate;

class ArrayList implements Arrayable, IteratorAggregate, Countable
{
    public array $list;

    public function __construct($list = null)
    {
        if ($list === null) {
            $converted = [];
        } elseif (!str_contains($list, ',')) {
            $converted = [$list];
        } else {
            $converted = collect(
                explode(',', $list)
            )->map(fn($v) => trim($v))->all();
        }

        $this->list = $converted;
    }

    public static function make($list = null): self
    {
        return new static($list);
    }

    public function __toString()
    {
        return implode(',', $this->list);
    }

    /**
     * @inheritDoc
     */
    public function toArray()
    {
        return $this->list;
    }

    public function toCollection()
    {
        return collect($this->list);
    }

    /**
     * @inheritDoc
     */
    public function getIterator()
    {
        return new ArrayIterator($this->list);
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->list);
    }
}
