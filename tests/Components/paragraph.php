<?php

uses(Tests\TestCase::class);

it('can render properly', function () {
    $this->assertComponentRenders(
        '<p class="text-blue-700 mt-4">Content</p>',
        '<x-paragraph class="mt-4" color="blue" content="Content" />'
    );
});

it('can work with slots', function () {
    $this->assertComponentRenders(
        '<p class="text-gray-700">Content</p>',
        '<x-paragraph>Content</x-paragraph>'
    );
});

it('can render markdown properly', function () {
    $this->assertComponentRenders(
        '<div class="prose prose-blue mt-4">
            <p><strong>Content</strong></p>
        </div>',
        '<x-paragraph markdown class="mt-4" color="blue">**Content**</x-paragraph>'
    );
});
