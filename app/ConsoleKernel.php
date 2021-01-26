<?php

namespace App;

use App\Command\MakeStorageCommand;
use App\Command\SetupCommand;
use App\Command\GetEnvCommand;
use App\Command\GetSettingCommand;
use App\Command\ListEnvCommand;
use App\Command\ListSettingsCommand;
use App\Command\MakeViewCommand;
use App\Command\SetEnvCommand;
use App\Command\SetSettingCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel;

class ConsoleKernel extends Kernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        SetupCommand::class,
        SetSettingCommand::class,
        GetSettingCommand::class,
        ListSettingsCommand::class,
        SetEnvCommand::class,
        GetEnvCommand::class,
        ListEnvCommand::class,
        MakeViewCommand::class,
        MakeStorageCommand::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
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
