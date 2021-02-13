<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\CastMakeCommand as GeneratorCommand;

class CastMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Cast';
    }
}
