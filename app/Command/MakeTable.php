<?php

namespace App\Command;

use File;
use Illuminate\Console\Command;

class MakeTable extends Command
{
    /** @var string */
    protected $signature = 'make:table {model}';

    /** @var string */
    protected $description = 'Creates a table programmatically';

    public function handle(): void
    {
        $path = app_path('View/Table/' . ucfirst($this->argument('model')) . 'Table.php');

        if (file_exists($path)) {
            $this->error('View already exists!');

            return;
        }

        file_put_contents($path, $this->getTableContents());

        $this->info('Table created successfully.');
    }

    public function getTableContents(): string
    {
        $model = $this->argument('model');
        $class = $model . 'Table';
        return <<<EOF
<?php

namespace App\View\Table;

use Starts\Table\Table;

class {$class} extends Table {

    public string \$model = '\App\Model\\$model';

    public function columns(): array {
        return [

        ];
    }
}
EOF;
    }
}
