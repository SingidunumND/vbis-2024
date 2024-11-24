<?php

namespace app\models;

use app\core\BaseModel;

class ReservationModel extends BaseModel
{
    public int $id;

    public string $reservation_time = '';
    public int $id_user;
    public int $id_service;

    public int $price;
    public function tableName()
    {
        return 'reservations';
    }

    public function readColumns()
    {
        return ['id','reservation_time','id_user','id_service','price'];
    }

    public function editColumns()
    {
        return ['reservation_time','id_user','id_service','price'];
    }

    public function validationRules()
    {
        return [
            'reservation_time' => [self::RULE_REQUIRED],
            'id_user' => [self::RULE_REQUIRED],
            'id_service' => [self::RULE_REQUIRED]
        ];
    }
}