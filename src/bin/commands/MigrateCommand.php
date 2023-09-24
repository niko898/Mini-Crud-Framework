<?php

namespace Akimov\Crud\bin\commands;

use Akimov\Crud\Core\Model\Model;

class MigrateCommand extends Model
{
    public function migrate($modelName)
    {
        $model
        if(is_string($model) && class_exists($model)) {
            $model = new $model();
        }
        //call_user_func_array(DIR_APPLICATION . '/', [$request, $response]);
    }
}