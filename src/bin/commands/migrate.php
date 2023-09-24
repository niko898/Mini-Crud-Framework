<?php
/*
$model_path = DIR_APPLICATION . '/src/Model/' . $model . '/Migration/' . $model . '.php';
if(file_exists($model_path)){
    require_once(DIR_APPLICATION . '/src/Core/Model/Model.php');
    require_once($model_path);
    var_dump(DIR_APPLICATION . '/src/Core/Model/Model.php');
    $db = new Model();

    $element = new $model();
    var_dump($element->getTableName);
}*/

use Akimov\Crud\Core\Model\Model;
$db = new Model();
var_dump($db->get());

$model_path = DIR_APPLICATION . '/src/Model/' . $model . '/Migration/' . $model . '.php';
if(file_exists($model_path)){
    /*require_once $model_path;
    $element = new $model();
    var_dump($element->getTableName);*/
    $obj = new \ReflectionObject($model_path); 
    
}