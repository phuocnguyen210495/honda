<?php

namespace App\Command\Laravel;

use Illuminate\Routing\Console\MiddlewareMakeCommand as GeneratorCommand;

class MiddlewareMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Middleware';
    }
}
