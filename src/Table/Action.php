<?php

namespace Starts\Table;

use Illuminate\Database\Eloquent\Model;

abstract class Action {

   abstract public function execute(Model $model);

}