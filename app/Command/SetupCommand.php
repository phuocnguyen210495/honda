<?php

namespace App\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Configure the project after a fresh git clone';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
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
        $this->output->success('Successfully set up the project');
        return 0;
    }
}
