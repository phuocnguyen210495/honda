<?php


namespace App\View\Tables;


use App\Model\User;
use Starts\Table\Column;
use Starts\Table\Table;

class UserTable extends Table
{
    public string $model = User::class;

    public function columns(): array
    {
        return [
            Column::create('name')
                ->searchable(),
            Column::create('email')
                ->searchable()
        ];
    }
}
