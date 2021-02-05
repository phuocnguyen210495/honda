<?php

it('can render properly', function () {
    $this->assertComponentRenders(
        '<h2 class="text-xs font-semibold tracking-wide text-blue-500 uppercase">Content</h2>',
        '<x-overline content="Content" />'
    );
});

it('can work with slots', function () {

});