<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\ModelMakeCommand as GeneratorCommand;

class ModelMakeCommand extends GeneratorCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return is_dir(app_path('Model')) ? $rootNamespace.'\\Model' : $rootNamespace;
    }
}
