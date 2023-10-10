<?php

namespace Akimov\Crud\Model\Post\Migration;

use Akimov\Crud\Core\Model\Migration\Migration;
use Akimov\Crud\Core\Model\Migration\MigrationInterface;

class Post extends Migration implements MigrationInterface
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
        $this->tableName = 'posts';
    }

    /**
     * Set table fields
     *
     * @return void
     */
    public function setTableFields(): void
    {
        $this->fields = [
            'post_id' => [
                'format' => 'INT (10) AUTO_INCREMENT PRIMARY KEY',
                'required' => false,
                'key' => true
            ],
            'user_id' => [
                'format' => 'INT (10) NOT NULL',
                'required' => false,
                'key' => true,
                'references' => [
                    'table_name' => 'users',
                    'field_name' => 'user_id',
                    'rules' => 'ON DELETE CASCADE'
                ]
            ],
            'title' => [
                'format' => 'VARCHAR(255)',
                'required' => true,
                'key' => false
            ],
            'text' => [
                'format' => 'TEXT',
                'required' => false,
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