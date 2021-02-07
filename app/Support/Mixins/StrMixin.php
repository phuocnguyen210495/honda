<?php

namespace App\Support\Mixins;

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

    public function quote(): callable
    {
        return function (string $str, string $quote = '"') {
            if ($str[0] === $quote && $str[-1] === $quote) {
                return $str;
            }

            return $quote . $str . $quote;
        };
    }

    public function unquote(): callable
    {
        return function (string $str, string $quotes = '\'"') {
            return str_replace(str_split($quotes), '', $str);
        };
    }
}
