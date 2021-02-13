<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\RequestMakeCommand as GeneratorCommand;

class RequestMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Request';
    }
}
