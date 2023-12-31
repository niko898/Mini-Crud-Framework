<?php

namespace Akimov\Crud\Model\User\Migration;

use Akimov\Crud\Core\Model\Migration\Migration;
use Akimov\Crud\Core\Model\Migration\MigrationInterface;

class User extends Migration implements MigrationInterface
{
    protected array $fields;
    protected string $tableName;

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
            'updated_at' => [
                'format' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
                'required' => false,
                'key' => false
            ],
            'created_at' => [
                'format' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
                'required' => false,
                'key' => false
            ]
        ];
    }

}