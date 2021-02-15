<?php

namespace App\Command\Laravel;

use Illuminate\Foundation\Console\ModelMakeCommand as GeneratorCommand;

class ModelMakeCommand extends GeneratorCommand
{
    public function handle()
    {
        parent::handle();

        shell_exec('cd ' . base_path() . ';composer helpers');
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return is_dir(app_path('Model')) ? $rootNamespace . '\\Model' : $rootNamespace;
    }
}
