<?php

namespace App\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SetupCommand extends Command
{
    protected $signature = 'setup';
    protected $description = 'Configure the project after a fresh git clone';

    public function handle(): void
    {
        shell_exec('cp .env.example .env');
        $this->info('Copied .env.example to .env');
        Artisan::call('key:generate');
        $this->info('Generated a fresh secret key');
        file_put_contents(
            database_path('database.sqlite'),
            ''
        );
        $this->info('Created a new database');
        shell_exec('php artisan migrate');
        $this->info('Migrated the database');
        shell_exec('composer helpers');
        $this->info('Create IDE helpers.');
        $this->output->success('Successfully set up the project');
    }
}
