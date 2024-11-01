<?php

namespace app\models;

use app\core\BaseModel;

class UserModel extends BaseModel
{
    public string $email;
    public string $first_name;
    public string $last_name;


    public function tableName() :string
    {
        return 'users';
    }


}