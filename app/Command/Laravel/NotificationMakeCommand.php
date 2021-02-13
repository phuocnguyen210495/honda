<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\NotificationMakeCommand as GeneratorCommand;

class NotificationMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Notification';
    }
}
