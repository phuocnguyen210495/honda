<?php

uses(Tests\TestCase::class);

it('can render properly an h1', function () {
    $this->assertComponentRenders(
        '<h1 class="text-4xl font-extrabold text-gray-800" style="line-height: 1.11111111">Hello folks!</h1>',
        '<x-title level="h1" content="Hello folks!" />'
    );
});

it('can render properly an h2', function () {
    $this->assertComponentRenders(
        '<h2 class="text-2xl font-bold text-gray-800" style="line-height: 1.3333333">Hello folks!</h2>',
        '<x-title level="h2" content="Hello folks!" />'
    );
});

it('can render properly an h3', function () {
    $this->assertComponentRenders(
        '<h3 class="text-xl font-bold text-gray-800" style="line-height: 1.6">Hello folks!</h3>',
        '<x-title level="h3" content="Hello folks!" />'
    );
});

it('can render properly an h4', function () {
    $this->assertComponentRenders(
        '<h4 class="font-bold text-gray-800 leading-6">Hello folks!</h4>',
        '<x-title level="h4" content="Hello folks!" />'
    );
});

it('can render properly an h5', function () {
    $this->assertComponentRenders(
        '<h5 class="text-gray-800">Hello folks!</h5>',
        '<x-title level="h5" content="Hello folks!" />'
    );
});

it('can render properly an h6', function () {
    $this->assertComponentRenders(
        '<h6 class="text-gray-800">Hello folks!</h6>',
        '<x-title level="h6" content="Hello folks!" />'
    );
});

it('can use a custom color', function () {
    $this->assertComponentRenders(
        '<h3 class="text-xl font-bold text-blue-500" style="line-height: 1.6">Hello folks!</h3>',
        '<x-title level="h3" color="blue" content="Hello folks!" />'
    );
});

it('passes attributes to the component', function () {
    $this->assertComponentRenders(
        '<h3 class="text-xl font-bold text-gray-800 some-class" style="line-height: 1.6" x-attribute="x-attribute">Hello folks!</h3>',
        '<x-title x-attribute class="some-class" level="h3" content="Hello folks!" />'
    );
});
