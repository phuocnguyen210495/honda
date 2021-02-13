<?php

namespace App\Command\Laravel;

use Illuminate\Routing\Console\ControllerMakeCommand as GeneratorCommand;

class ControllerMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Controller';
    }
}
