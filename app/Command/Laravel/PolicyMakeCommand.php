<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\PolicyMakeCommand as GeneratorCommand;

class PolicyMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Policy';
    }
}
