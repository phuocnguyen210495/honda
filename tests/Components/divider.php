<?php

uses(Tests\TestCase::class);

it('can render properly', function () {
    $this->assertComponentRenders(
        '<div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
            </div>
        </div>',
        '<x-divider />'
    );
});

it('can render properly with a label', function () {
    $this->assertComponentRenders(
        '<div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
                        <span class="bg-gray-100 text-gray-500 px-2">Not sure about that?</span>
            </div>
        </div>',
        '<x-divider label="Not sure about that?" />'
    );
});

it('can works with slots', function () {
    $this->assertComponentRenders(
        '<div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
                        <span class="bg-gray-100 text-gray-500 px-2">Not sure about that?</span>
            </div>
        </div>',
        '<x-divider>
                <span class="bg-gray-100 text-gray-500 px-2">Not sure about that?</span>
            </x-divider>'
    );
});
