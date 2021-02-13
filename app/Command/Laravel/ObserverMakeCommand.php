<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\ObserverMakeCommand as GeneratorCommand;

class ObserverMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Observer';
    }
}
