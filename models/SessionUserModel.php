<?php

namespace app\models;

use app\core\BaseModel;

class SessionUserModel extends BaseModel
{
    public int $id;
    public  $first_name;
    public  $last_name;

    public string $email;
    public string $role;

    public function getSessionData(){
        $query = "select u.first_name,u.last_name,u.email, r.name as role from user_roles ur 
                  left join users u on u.id = ur.id_user
                  left join roles r on r.id = ur.id_role
                  where u.email = '$this->email'";

        $dbResult = $this->con->query($query);
        $this->mapData($dbResult->fetch_assoc());
    }

    public function tableName()
    {
        return '';
    }

    public function readColumns()
    {
        return [];
    }

    public function editColumns()
    {
        return [];
    }

    public function validationRules()
    {
        return [];
    }
}

//select u.first_name,u.last_name,r.name from user_roles ur
//