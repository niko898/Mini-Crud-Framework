<?php

namespace Akimov\Crud\Core\Model\Migration;

interface MigrationInterface
{

    public function getTableName(string $prefix);

    public function validateTable(array $data);

    public function getTableFields();


}