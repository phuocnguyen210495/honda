<?php

namespace Starts\Table\Actions;

use Illuminate\Database\Eloquent\Model;
use Starts\Table\Action;

class Delete extends Action
{
    public function execute(Model $model)
    {
        $model->delete();
    }
}
