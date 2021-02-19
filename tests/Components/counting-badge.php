<?php

uses(Tests\TestCase::class);

it('can render properly', function () {
    $this->assertComponentRenders(
        '<div class="flex items-center justify-center rounded-full text-sm bg-gray-500 text-white px-3 py-1.5">
            <span class="leading-none">4</span>
        </div>',
        '<x-counting-badge count="4" />');
});
it('does not render when count is 0', function () {
    $this->assertComponentRenders('', '<x-counting-badge count="0" />');
});
it('renders when count is 0 but always-show is set', function () {
    $this->assertComponentRenders(
        '<div class="flex items-center justify-center rounded-full text-sm bg-gray-500 text-white px-3 py-1.5">
            <span class="leading-none">0</span>
         </div>',
        '<x-counting-badge count="0" always-show />
    ');
});
it('can use a custom color', function () {
    $this->assertComponentRenders(
        '<div class="flex items-center justify-center rounded-full text-sm bg-red-500 text-white px-3 py-1.5">
            <span class="leading-none">0</span>
         </div>',
        '<x-counting-badge color="red" count="0" always-show />
    ');
});
