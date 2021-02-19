<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\RuleMakeCommand as GeneratorCommand;

class RuleMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Rule';
    }
}
