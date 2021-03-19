<?php

namespace App\Support\Mixins;

use Illuminate\Support\Str;

/**
 * @mixin Str
 */
class StrMixin
{
    public function humanize(): callable
    {
        return function (string $text) {
            return ucwords(str_replace(
                '#[space]',
                ' ',
                trim(preg_replace('/[^\x21-\x7E]/', '', str_replace(['_', '-'], '#[space]', $text)))
            ));
        };
    }
}
