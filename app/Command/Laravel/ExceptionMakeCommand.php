<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\ExceptionMakeCommand as GeneratorCommand;

class ExceptionMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Exception';
    }
}
