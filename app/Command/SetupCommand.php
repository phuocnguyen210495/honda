<?php

namespace App\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SetupCommand extends Command
{
    protected $signature   = 'setup';
    protected $description = 'Configure the project after a fresh git clone';

    public function handle(): void
    {
        $this->command('cp .env.example .env');
        $this->info('Copied .env.example to .env');
        Artisan::call('key:generate');
        $this->info('Generated a fresh secret key');
        file_put_contents(
            database_path('database.sqlite'),
            ''
        );
        $this->info('Created a new database');
        $this->command('php artisan migrate');
        $this->info('Migrated the database');
        $this->command('composer helpers');
        $this->info('Create IDE helpers.');

        if (shell_exec('which valet') !== null) {
            $siteName = explode('.', basename(base_path()))[0];

            $this->command('valet link ' . $siteName);
            $this->info("Linked your project to valet on [http://$siteName.test]");
        }

        $this->output->success('Successfully set up the project');
    }

    public function command(string $command)
    {
        return shell_exec('cd ' . base_path() . ';' . $command);
    }
}
