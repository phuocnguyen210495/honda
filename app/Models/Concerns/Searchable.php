<?php

namespace App\Models\Concerns;

use Arr;
use Illuminate\Database\Eloquent\Builder;

trait Searchable
{
    public static function search(array $attributes, string $term): Builder
    {
        return static::where(function (Builder $query) use ($attributes, $term) {
            foreach (Arr::wrap($attributes) as $attribute) {
                $query->when(
                    str_contains($attribute, '.'),
                    function (Builder $query) use ($attribute, $term) {
                        $buffer = explode('.', $attribute);
                        $attributeField = array_pop($buffer);
                        $relationPath = implode('.', $buffer);
                        $query->orWhereHas($relationPath, function (Builder $query) use ($attributeField, $term) {
                            $query->where($attributeField, 'LIKE', "%{$term}%");
                        });
                    },
                    function (Builder $query) use ($attribute, $term) {
                        $query->orWhere($attribute, 'LIKE', "%{$term}%");
                    }
                );
            }
        });
    }
}
