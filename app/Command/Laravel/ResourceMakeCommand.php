<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\ResourceMakeCommand as GeneratorCommand;

class ResourceMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Resource';
    }
}
