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
        $result = $model->get();
        $model->mapData($result);

        $this->view->render('getUser', 'main', $model);
    }
}