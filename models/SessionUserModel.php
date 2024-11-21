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
        $query = "select u.id as id_user, u.first_name,u.last_name,u.email, r.name as role from user_roles ur 
                  left join users u on u.id = ur.id_user
                  left join roles r on r.id = ur.id_role
                  where u.email = '$this->email'";

        $dbResult = $this->con->query($query);

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        return $resultArray;
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