<?php

namespace app\models;

use app\core\BaseModel;

class RoleModel extends BaseModel
{
    public int $id;
    public string $name = '';

    public function tableName()
    {
        return 'roles';
    }

    public function readColumns()
    {
        return ['id', 'name'];
    }

    public function editColumns() : array
    {
        return ['name'];
    }

    public function validationRules() : array
    {
        return [
            "name" => [self::RULE_REQUIRED]
        ];
    }
}