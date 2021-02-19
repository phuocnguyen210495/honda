<?php

namespace App\View\Table;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;
use Starts\Table\Action;
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
                ->searchable(),
        ];
    }

    public function actions(): array
    {
        return [
            Action::create()
                ->icon('trash')
                ->color('red')
                ->execute(function (Model $model) {
                    $model->delete();
                }),
        ];
    }
}
