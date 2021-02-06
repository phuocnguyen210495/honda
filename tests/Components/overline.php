<?php

it('can render properly', function () {
    $this->assertComponentRenders(
        '<h2 class="text-xs font-semibold tracking-wide text-blue-500 uppercase">Content</h2>',
        '<x-overline content="Content" />'
    );
});

it('can work with slots', function () {
    $this->assertComponentRenders(
        '<h2 class="text-xl font-semibold tracking-wide text-blue-500 uppercase">Content</h2>',
        '<x-overline size="xl">Content</x-overline>'
    );
});

it('can use a custom color', function () {
    $this->assertComponentRenders(
        '<h2 class="text-xl font-semibold tracking-wide text-red-500 uppercase">Content</h2>',
        '<x-overline size="xl" color="red">Content</x-overline>'
    );
});
