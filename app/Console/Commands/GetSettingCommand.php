<?php

namespace App\Console\Commands;

use App\View\Components\Value;
use Illuminate\Console\Command;
use Spatie\Valuestore\Valuestore;

class GetSettingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'settings:get {key}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets the value of a global setting';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $value = app(Valuestore::class)->get(
            $key = $this->argument('key')
        );

        $this->info("Showing the value of [$key] in the settings:");

        dump($value);
    }
}
