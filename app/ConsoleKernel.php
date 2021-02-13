<?php

namespace App;

use App\Command\GetEnvCommand;
use App\Command\GetSettingCommand;
use App\Command\ListEnvCommand;
use App\Command\ListSettingsCommand;
use App\Command\MakeStorageCommand;
use App\Command\MakeViewCommand;
use App\Command\SetEnvCommand;
use App\Command\SetSettingCommand;
use App\Command\SetupCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel;

class ConsoleKernel extends Kernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [];

    /**
     * Define the application's command schedule.
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Command');

        require base_path('routes/console.php');
    }
}
