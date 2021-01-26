<?php

namespace App\Command;

use File;
use Illuminate\Console\Command;

class MakeStorageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:storage {name} {--driver=local} {--root=} {--private}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a view programmatically';

    public function handle()
    {
        $disk = $this->buildDisk(
            $name = $this->argument('name'),
            $this->option('driver'),
            $this->option('root'),
            $this->option('private') ? 'private' : 'public'
        );

        $disks = File::get($path = config_path('filesystems.php'));

        if (!str_contains($disks, '/* @disks */')) {
            $this->error('The configuration must contain the /* @disks */ annotation array in order to make the command make:storage work.');

            return;
        }

        if (config('filesystems.disks.' . $name) !== null) {
            $this->error("The disk [$name] already exists.");

            return;
        }

        File::put($path, str_replace('/* @disks */', $disk, $disks));

        $this->info("Successfully created the disk [$name]");
    }

    public function buildDisk(string $name, string $driver, string $root = null, string $visibility = 'public'): string
    {
        $disk = "'$name' => [
            'driver' => '$driver',
            'visibility' => '$visibility',
";

        if (!is_null($root)) {
            $disk .= "            'root' => '$root'\n";
        }

        $disk .= "        ],\n\n        /* @disks */";

        return $disk;
    }
}
