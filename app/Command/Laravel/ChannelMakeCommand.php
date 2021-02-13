<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\ChannelMakeCommand as GeneratorCommand;

class ChannelMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Broadcasting';
    }
}
