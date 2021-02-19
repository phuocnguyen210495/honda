<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\MailMakeCommand as GeneratorCommand;

class MailMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Mail';
    }
}
