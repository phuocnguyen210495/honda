<?php

namespace App\Command;

use Illuminate\Console\Command;
use Spatie\Valuestore\Valuestore;

class ListSettingsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'settings:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lists all the global settings defined';

    /*
     * Execute the console command.
     *
     *
     * @return int
     */
    public function handle()
    {
        $rows = collect(app(Valuestore::class)->all())->map(function ($value, $key) {
            return [$key, is_array($value) ? json_encode($value, JSON_THROW_ON_ERROR) : $value];
        })->values();

        $this->table(['Key', 'Value'], $rows);
    }
}
