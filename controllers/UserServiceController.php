<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;
use app\models\ReservationModel;
use app\models\ServiceModel;

class UserServiceController extends BaseController
{
    public function listForUsers()
    {
        $model = new ServiceModel();

        $result = $model->all("");

        $this->view->render('serviceForUser', 'auth', $result);
    }

    public function accessRole()
    {
        return [];
    }
}