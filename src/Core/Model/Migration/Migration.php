<?php

namespace Akimov\Crud\Core\Model\Migration;

class Migration 
{

    protected array $fields;
    protected string $tableName;

    /**
     * validate table
     *
     * @param array $data
     * @return array
     */
    public function validateTable(array $data): array
    {
        $errors = [];
        foreach($data as $fieldName => $fieldValue){
            if (isset($this->fields[$fieldName])) {
                if($this->fields[$fieldName]['required'] === true && empty($fieldValue)){
                    $errors[$fieldName] = 'This field is required';
                }
            }
        }
        return $errors;
    }

    /**
     * get table name
     *
     * @return string
     */
    public function getTableName(): string
    {
        return $this->tableName;
    }

    /**
     * get exist table fields
     *
     * @return array
     */
    public function getTableFields(): array
    {
        return $this->fields;
    }
}