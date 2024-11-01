<?php

namespace app\models;

use app\core\BaseModel;
use app\core\DbConnection;

class ProductModel extends BaseModel
{
    public string $name;

    public string $description;
    public string $price;

    public function tableName() : string
    {
        return 'products';
    }
}