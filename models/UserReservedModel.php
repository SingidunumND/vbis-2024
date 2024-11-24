<?php

namespace app\models;

use app\core\Application;
use app\core\BaseModel;

class UserReservedModel extends BaseModel
{
    public string $name='';

    public string $location='';
    public string $salon_name='';
    public string $service_name='';
    public string $reservation_time='';
    public $file;

    public function tableName()
    {
        return '';
    }

    public function readColumns()
    {
        return ['id','location','salon_name','service_name','file','reservation_time'];
    }

    public function editColumns()
    {
        return [];
    }

    public function validationRules()
    {
        return [];
    }

    public function getReservedData(){

        $id_user=0;

        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session) {
            $id_user = $session['id_user'];
        }

        $query="select r.reservation_time, s.* from reservations r left join services s on r.id_service=s.id where r.id_user=$id_user";

        $dbResult = $this->con->query($query);

        $resultArray=[];

        while ($result = $dbResult->fetch_assoc())
        {
            $resultArray[]=$result;
        }

        return $resultArray;
    }
}