<?php

namespace app\models;

use app\core\BaseModel;

class ProductModel extends BaseModel
{
    public string $name;

    public string $description;
    public string $price;

    public function tableName() : string
    {
        return 'products';
    }

    public function readColumns() : array
    {
        return ["name", "description", "price"];
    }
}