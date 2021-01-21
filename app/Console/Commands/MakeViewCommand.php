<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a view programmatically';

    public function handle()
    {
        $name = str_replace(
            '.blade.php',
            '',
            $this->argument('name')
        );

        $path = resource_path('views/' . str_replace('.', '/', $name)) . '.blade.php';

        if (file_exists($path)) {
            return $this->error('View already exists!');
        }

        $created = file_put_contents($path, $this->getViewContents());

        if (!$created) {
            $this->error('Error creating the view.');
        } else {
            $this->info('View created successfully!');
        }        
    }

    public function getViewContents(): string {
        return <<<EOF
        <x-layout title="">
            <x-container>
            
            </x-container>
        </x-layout>
        EOF;
    }
}