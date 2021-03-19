<?php

namespace App\Livewire\Tables;


use App\Model\User;
use Honda\Table\Components\Table;

class UserTable extends Table
{
    public static string $model = User::class;

    public function columns(): array {
        return [
            //
        ];
    }

    public function actions(): array {
        return [
            //
        ];
    }
}
