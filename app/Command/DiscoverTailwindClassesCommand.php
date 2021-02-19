<?php

namespace App\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Str;
use Symfony\Component\Finder\SplFileInfo;

class DiscoverTailwindClassesCommand extends Command
{
    /** @var string */
    protected $signature = 'tailwind:discover';

    /** @var string */
    protected $description = 'Discover dynamically generated color classes';

    public function handle()
    {
        $classes = Collection::fromFiles(resource_path('views/components'), resource_path('views/livewire'))
            ->map(function (SplFileInfo $file) {
                preg_match_all('/class=".+"/mi', $file->getContents(), $matches);

                $prefix = str_contains($file->getPathname(), 'views/livewire') ? 'livewire:' : 'x-';

                return [$prefix . explode('.', $file->getFilename())[0], str_replace(['{', '}'], ['<', '>'], trim(
                    collect($matches)
                        ->flatten()
                        ->map(fn ($match) => Str::unquote(explode('=', $match)[1]))
                        ->reduce(fn ($_, $match) => $_ . ' ' . $match, '')
                ))];
            })
            ->filter(fn ($class) => !empty($class[1]))
            ->map(fn ($class)    => preg_replace('/<<( |)settings\(color\)( |)>>/', settings('color'), $class));

        Collection::fromFiles(resource_path('views'))->map(function () {
        });
    }
}
