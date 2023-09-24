<?php

namespace Akimov\Crud\Model\User\Migration;

use Akimov\Crud\Core\Model\Migration\MigrationInterface;

class User //implements MigrationInterface
{
    private array $fields;
    private string $tableName;

    public function __construct()
    {
        $this->setTableName();
        $this->setTableFields();
    }

    /**
     * set table name
     *
     * @return void
     */
    public function setTableName():void
    {
        $this->tableName = 'users';
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
     * Set table fields
     *
     * @return void
     */
    public function setTableFields(): void
    {
        $this->fields = [
            'user_id' => [
                'format' => 'INT AUTO_INCREMENT PRIMARY KEY',
                'required' => false,
                'key' => true
            ],
            'firstname' => [
                'format' => 'VARCHAR(50)',
                'required' => true,
                'key' => false
            ],
            'lastname' => [
                'format' => 'VARCHAR(50)',
                'required' => true,
                'key' => false
            ],
            'created_at' => [
                'format' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
                'required' => false,
                'key' => false
            ]
        ];
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