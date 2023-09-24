<?php

namespace Akimov\Crud\Core\Model\Migration;

interface MigrationInterface
{

    public function getTableName();

    public function validateTable(array $data);

    public function getTableFields();


}