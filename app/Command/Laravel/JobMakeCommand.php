<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\JobMakeCommand as GeneratorCommand;

class JobMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Job';
    }
}
