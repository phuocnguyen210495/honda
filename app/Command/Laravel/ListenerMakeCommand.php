<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\ListenerMakeCommand as GeneratorCommand;

class ListenerMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Listener';
    }
}
