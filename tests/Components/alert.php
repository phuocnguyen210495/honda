<?php

use Tests\TestCase;

it('can render properly', function () {
    $this->assertComponentRenders(
        '<div class="bg-red-100 text-red-700 p-4 rounded-lg" x-data="{ closed: false }" x-show="!closed">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                    <p class="ml-4">We got a problem...</p>
                </div>
            </div>
        </div>',
        '<x-alert type="error" content="We got a problem..." />'
    );
});

it('can render properly a closeable alert', function () {
    $this->assertComponentRenders(
        '<div class="bg-red-100 text-red-700 p-4 rounded-lg" x-data="{ closed: false }" x-show="!closed">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                    <p class="ml-4">We got a problem...</p>
                </div>
            <button @click="closed = true" class="focus:outline-none focus:bg-red-200 hover:bg-red-200 rounded-lg p-2 -m-2">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
        </div>',
        '<x-alert type="error" content="We got a problem..." closeable />'
    );
});

it('can render properly a closeable alert with a description', function () {
    TestCase::nodebug(function () {
        $this->assertComponentRenders(
            '<div class="bg-red-100 text-red-700 p-4 rounded-lg" x-data="{ closed: false }" x-show="!closed">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                    <p class="ml-4 font-semibold">We got a problem...</p>
                </div>
            <button @click="closed = true" class="focus:outline-none focus:bg-red-200 hover:bg-red-200 rounded-lg p-2 -m-2">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
            <p class="mt-2 max-w-lg leading-8 pl-10">
                Sorry, this is an error.
            </p>
        </div>',
            '<x-alert type="error" content="We got a problem..." closeable description="Sorry, this is an error." />'
        );
    });
});
