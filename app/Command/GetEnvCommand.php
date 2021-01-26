<?php

namespace App\Command;

use App\Support\ArrayList;
use Illuminate\Console\Command;

class GetEnvCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'env:get {key}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieves the value of an env variable.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        ArrayList::make($this->argument('key'))->toCollection()->each(function ($key) use (&$rows) {
            $rows[] = [$key, env($key) ?? 'null'];
        });

        $this->table(['Key', 'Value'], $rows);
    }
}
