<?php

use Akimov\Crud\Core\Model\Model;
$db = new Model();
$pdo = $db->get();

$model_path = DIR_APPLICATION . '/src/Model/' . $model . '/Migration/' . $model . '.php';
if(file_exists($model_path)){
    $model = 'Akimov\\Crud\\Model\\User\\Migration\\' . $model;
    require_once $model_path;
    $element = new $model();

    $tableName = $element->getTableName();
    $fields = $element->getTableFields();
    $first_field_name = array_key_first($fields);

    if(!isset($fields[$first_field_name]) || !isset($fields[$first_field_name]['key']) || !$fields[$first_field_name]['key'] ){
        die("The fields are ampty");
    }

    // create table
    $sql = "CREATE TABLE IF NOT EXISTS`" . DB_PREFIX . "$tableName` (
        " . $first_field_name . " " . $fields[$first_field_name]['format'] . " 
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

    $pdo->query($sql);

    foreach($fields as $field_name => $field_params){
        $sql = "SHOW COLUMNS FROM `" . DB_PREFIX . "$tableName` LIKE '$field_name';";
        
		$query = $pdo->query($sql);

		if (!$query->rowCount()) {
			$sql = "ALTER TABLE `" . DB_PREFIX . "$tableName` ADD COLUMN `$field_name` " . $field_params['format'] . " ;";
			$pdo->query($sql);
		}
    }
    
}