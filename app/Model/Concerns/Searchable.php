<?php

namespace App\Model\Concerns;

trait Searchable
{
    public static function search(?string $term, array $columns)
    {
        if ($term === null) {
            return static::query();
        }

        $query = static::query()->where($columns[0], 'like', '%' . $term . '%');

        array_shift($columns);

        foreach ($columns as $column) {
            $query->orWhere(
                $column,
                'like',
                '%' . $term . '%'
            );
        }

        return $query;
    }
}
