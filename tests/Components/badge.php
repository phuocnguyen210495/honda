<?php

uses(Tests\TestCase::class);

it('can render properly', function () {
    $this->assertComponentRenders(
        '<div>
            <a class="flex items-center rounded-lg px-3 text-sm py-1.5 bg-blue-200 text-blue-700">
                <span
                    class="inline-block font-semibold leading-none">Sold</span>
            </a>
        </div>',
        '<x-badge content="Sold" />'
    );
});

it('can work with slots', function () {
    $this->assertComponentRenders(
        '<div>
            <a class="flex items-center rounded-lg px-3 text-sm py-1.5 bg-blue-200 text-blue-700">
                <span
                    class="inline-block font-semibold leading-none">Sold</span>
            </a>
        </div>',
        '<x-badge>Sold</x-badge>'
    );
});

it('can use a custom color', function () {
    $this->assertComponentRenders(
        '<div>
            <a class="flex items-center rounded-lg px-3 text-sm py-1.5 bg-red-200 text-red-700">
                <span
                    class="inline-block font-semibold leading-none">Sold</span>
            </a>
        </div>',
        '<x-badge content="Sold" color="red" />'
    );
});

it('can be dotted', function () {
    $this->assertComponentRenders(
        '<div>
            <a class="flex items-center rounded-lg px-3 text-sm py-1.5 bg-red-200 text-red-700">
                <span class="inline-block w-1 h-1 rounded-full bg-red-700"></span>

                <span
                    class="inline-block font-semibold leading-none ml-2">Sold</span>
            </a>
        </div>',
        '<x-badge content="Sold" color="red" dotted />'
    );
});

it('can be a link', function () {
    $this->assertComponentRenders(
        '<div>
            <a href="http://localhost" class="flex items-center hover:bg-red-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 rounded-lg px-3 text-sm py-1.5 bg-red-200 text-red-700">
                <span class="inline-block w-1 h-1 rounded-full bg-red-700"></span>

                <span
                    class="inline-block font-semibold leading-none ml-2">Sold</span>
            </a>
        </div>',
        '<x-badge content="Sold" color="red" dotted href="welcome"/>'
    );
});

it('can be disabled', function () {
    $this->assertComponentRenders(
        '<div>
            <a class="flex items-center opacity-50 select-none cursor-default rounded-lg px-3 text-sm py-1.5 bg-gray-200 text-gray-700">
                <span class="inline-block w-1 h-1 rounded-full bg-gray-700"></span>

                <span
                    class="inline-block font-semibold leading-none ml-2">Sold</span>
            </a>
        </div>',
        '<x-badge content="Sold" color="red" dotted href="welcome" disabled />'
    );
});

it('can be a pill', function () {
    $this->assertComponentRenders(
        '<div>
            <a class="flex items-center opacity-50 select-none cursor-default rounded-full px-3 text-sm py-1.5 bg-gray-200 text-gray-700">
                <span class="inline-block w-1 h-1 rounded-full bg-gray-700"></span>

                <span
                    class="inline-block font-semibold leading-none ml-2">Sold</span>
            </a>
        </div>',
        '<x-pill content="Sold" color="red" dotted href="welcome" disabled />'
    );
});
