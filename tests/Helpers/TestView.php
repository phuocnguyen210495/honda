<?php


namespace Tests\Helpers;

use Illuminate\Testing\Assert as PHPUnit;
use Illuminate\View\View;

class TestView
{
    protected View $view;
    protected string $rendered;

    public function __construct(View $view)
    {
        $this->view = $view;
        $this->rendered = $view->render();
    }

    /**
     * Assert that the given string is contained within the view.
     *
     * @param string $value
     * @param bool $escaped
     * @return $this
     */
    public function assertSee($value, $escaped = true): self
    {
        $value = $escaped ? e($value) : $value;

        PHPUnit::assertStringContainsString((string)$value, $this->rendered);

        return $this;
    }

    /**
     * Assert that the given strings are contained in order within the view.
     *
     * @param array $values
     * @param bool $escape
     * @return $this
     */
    public function assertSeeInOrder(array $values, $escape = true): self
    {
        $values = $escape ? array_map('e', ($values)) : $values;

        PHPUnit::assertThat($values, new SeeInOrder($this->rendered));

        return $this;
    }

    /**
     * Assert that the given string is contained within the view text.
     *
     * @param string $value
     * @param bool $escape
     * @return $this
     */
    public function assertSeeText($value, $escape = true): self
    {
        $value = $escape ? e($value) : $value;

        PHPUnit::assertStringContainsString((string)$value, strip_tags($this->rendered));

        return $this;
    }

    /**
     * Assert that the given strings are contained in order within the view text.
     *
     * @param array $values
     * @param bool $escape
     * @return $this
     */
    public function assertSeeTextInOrder(array $values, $escape = true): self
    {
        $values = $escape ? array_map('e', ($values)) : $values;

        PHPUnit::assertThat($values, new SeeInOrder(strip_tags($this->rendered)));

        return $this;
    }

    /**
     * Assert that the given string is not contained within the view.
     *
     * @param string $value
     * @param bool $escape
     * @return $this
     */
    public function assertDontSee($value, $escape = true): self
    {
        $value = $escape ? e($value) : $value;

        PHPUnit::assertStringNotContainsString((string)$value, $this->rendered);

        return $this;
    }

    /**
     * Assert that the given string is not contained within the view text.
     *
     * @param string $value
     * @param bool $escape
     * @return $this
     */
    public function assertDontSeeText($value, $escape = true): self
    {
        $value = $escape ? e($value) : $value;

        PHPUnit::assertStringNotContainsString((string)$value, strip_tags($this->rendered));

        return $this;
    }

    /**
     * Get the string contents of the rendered view.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->rendered;
    }
}
