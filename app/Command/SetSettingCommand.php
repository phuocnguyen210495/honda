<?php

namespace App\Command;

use Illuminate\Console\Command;
use Spatie\Valuestore\Valuestore;

class SetSettingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'settings:set {key} {value}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sets a global setting.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $store = app(Valuestore::class)->put(
            $key = $this->argument('key'),
            $value = $this->argument('value')
        );

        if ($store->get($key) === $value) {
            $this->info("Successfully set [$key] to [$value] in settings.json");
        } else {
            $this->error("Can not set [$key] to [$value] in settings.json");
        }
    }
}
