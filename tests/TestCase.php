<?php

namespace Tests;

use Gajus\Dindent\Indenter;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\Concerns\InteractsWithViews;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use InteractsWithViews;

    public bool $debug = false;

    public static function debug(callable $debugging)
    {
        test()->debug = true;

        $debugging();

        test()->debug = false;
    }

    public static function nodebug(callable $pass): void
    {
        $pass();
    }

    public function assertComponentRenders(string $expected, string $template, array $data = []): void
    {
        $indenter = new Indenter();
        $indenter->setElementType('h1', Indenter::ELEMENT_TYPE_INLINE);
        $indenter->setElementType('del', Indenter::ELEMENT_TYPE_INLINE);

        $blade    = (string) $this->blade($template, $data);
        $indented = $indenter->indent($blade);
        $cleaned  = str_replace(
            [' >', "\n/>", ' </div>', '> ', "\n>"],
            ['>', ' />', "\n</div>", ">\n    ", '>'],
            $indented,
        );

        if ($this->debug) {
            $this->assertSame($expected, $cleaned);
        } else {
            $this->assertSame(
                str_replace([' ', PHP_EOL], '', $expected),
                str_replace([' ', PHP_EOL], '', $cleaned));
        }
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('view:clear');
    }

    protected function flashOld(array $input): void
    {
        session()->flashInput($input);

        request()->setLaravelSession(session());
    }
}
