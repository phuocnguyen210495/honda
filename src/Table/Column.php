<?php

namespace Starts\Table;

class Column
{
    public string $label;
    public string $modelColumn;

    public bool $show;

    public bool $searchable;
    public bool $filterable;
    public bool $copyable;
    public bool $editable;
    public ?int $truncate = 50;

    public string $type = 'default';
    public array $typeProps = [];

    public function __construct(string $column)
    {
        $this->modelColumn = $column;
    }

    public static function create(string $column): Column
    {
        return new static($column);
    }

    public function label(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function searchable(bool $searchable = false): self
    {
        $this->searchable = $searchable;
        return $this;
    }

    public function filtrable(bool $filterable = true): self
    {
        $this->filterable = $filterable;
        return $this;
    }

    public function copyable(bool $copyable = true): self
    {
        $this->copyable = $copyable;
        return $this;
    }

    public function truncate(int $max = 50): self
    {
        $this->truncate = $max;
        return $this;
    }

    public function editable(bool $editable = true): self
    {
        $this->editable = $editable;
        return $this;
    }

    public function asLink(): self
    {
        $this->type = 'link';
        return $this;
    }

    public function asTime(): self
    {
        $this->type = 'time';
        return $this;
    }

    public function asImage(string $disk): self
    {
        $this->type = 'image';
        $this->typeProps = [
            'disk' => $disk
        ];
        return $this;
    }

    public function asBool(): self
    {
        $this->type = 'bool';
        return $this;
    }

    public function asDate(string $format = 'LL'): self
    {
        $this->type = 'date';
        $this->typeProps = [
            'format' => $format
        ];
        return $this;
    }

    public function asDateDiff(): self
    {
        $this->type = 'date-diff';
        return $this;
    }

    public function show(bool $show = true): self
    {
        $this->show = $show;
        return $this;
    }

    public function showIf(bool $condition): self
    {
        if ($condition) {
            $this->show = true;
        }

        return $this;
    }


    public function showUnless(bool $condition): self
    {
        if (!$condition) {
            $this->show = $condition;
        }
        return $this;
    }

    public function hide(bool $hide = true): self
    {
        $this->show = !$hide;
        return $this;
    }

    public function hideIf(bool $condition): self
    {
        if ($condition) {
            $this->show = false;
        }
        return $this;
    }

    public function hideUnless(bool $condition): self
    {
        if (!$condition) {
            $this->show = false;
        }
        return $this;
    }
}
