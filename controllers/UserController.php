<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;
use app\models\UserModel;

class UserController extends BaseController
{
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

    public function updateUser()
    {
        $model = new UserModel();

        $model->mapData($_GET);

        $model->one("where id=$model->id");

        $this->view->render('updateUser', 'main', $model);
    }

    public function processUpdateUser()
    {
        $model = new UserModel();

        $model->mapData($_POST);

        $model->validate();

        if ($model->errors)
        {
            Application::$app->session->set('errorNotification', 'User not updated!');
            $this->view->render('updateUser', 'main', $model);
            exit;
        }

        $model->update("where id=$model->id");
        Application::$app->session->set('successNotification', 'User updated!');

        header("location:" . "/users");
    }

    public function createUser()
    {
        $this->view->render('createUser', 'main', new UserModel());
    }

    public function processCreateUser()
    {
        $model = new UserModel();

        $model->mapData($_POST);

        $model->validate();

        if ($model->errors)
        {
            Application::$app->session->set('errorNotification', 'User not created!');
            $this->view->render('createUser', 'main', $model);
            exit;
        }

            $model->insert();
            Application::$app->session->set('successNotification', 'User created!');
            header("location:" . "/users");
    }

    public function accessRole() : array
    {
        return ["Administrator"];
    }
}