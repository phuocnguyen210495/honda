<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\ProviderMakeCommand as GeneratorCommand;

class ProviderMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Provider';
    }
}
