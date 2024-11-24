<?php

namespace app\models;

use app\core\BaseModel;

class ServiceModel extends BaseModel
{
    public int $id;

    public string $location='';
    public string $salon_name='';
    public string $service_name='';

    public string $file='';

    public int $price = 0;

    public function tableName()
    {
        return 'services';
    }

    public function readColumns()
    {
        return ['id','location','salon_name','service_name','file','price'];
    }

    public function editColumns()
    {
        return ['location','salon_name','service_name','file','price'];
    }

    public function validationRules()
    {
        return [
            'location' => [self::RULE_REQUIRED],
            'salon_name' => [self::RULE_REQUIRED],
            'service_name' => [self::RULE_REQUIRED],
            'price' => [self::RULE_REQUIRED,self::RULE_GREATER_THAN_ZERO],
        ];
    }
}