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
        $model->one("where id=2");

        $this->view->render('getUser', 'main', $model);
    }

    public function readAll()
    {
        $model = new UserModel();
        $result = $model->all("");
        $this->view->render('users', 'main', $result);
    }
}