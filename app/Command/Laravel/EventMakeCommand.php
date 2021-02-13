<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\EventMakeCommand as GeneratorCommand;

class EventMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Event';
    }
}
