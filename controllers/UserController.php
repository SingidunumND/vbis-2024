<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\UserModel;

class UserController extends BaseController
{
    public function userCreate() : string
    {
        return "User Created";
    }

    public function readUser()
    {
        $model = new UserModel();
        $model->email="nikola.djurdjic.23@singimail.rs";
        $model->firstName="Nikola";
        $model->lastName="Djurdjic";

        return $this->view->render('getUser', 'main', $model);
    }
}