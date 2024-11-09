<?php

namespace app\models;

use app\core\BaseModel;

class ProductModel extends BaseModel
{
    public int $id;

    public string $name;

    public string $description;

    public function tableName() : string
    {
        return 'products';
    }

    public function readColumns() : array
    {
        return ["id", "name", "description"];
    }

    public function editColumns() : array
    {
        return ["name", "description"];
    }
}