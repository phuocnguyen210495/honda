<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\ConsoleMakeCommand as GeneratorCommand;

class ConsoleMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Command';
    }
}
