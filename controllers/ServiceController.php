<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;
use app\models\ServiceModel;

class ServiceController extends BaseController
{
    public function list()
    {
        $model = new ServiceModel();

        $result = $model->all("");

        $this->view->render('services', 'main', $result);
    }

    public function create()
    {
        $this->view->render('createService', 'main', new ServiceModel());
    }

    public function processCreate()
    {
        $model = new ServiceModel();

        $model->mapData($_POST);

        $model->validate();

        if ($model->errors)
        {
            Application::$app->session->set('errorNotification', 'Service not created!');
            $this->view->render('createService', 'main', $model);
            exit;
        }

        $model->insert();
        Application::$app->session->set('successNotification', 'Service created!');
        header("location:" . "/services");
    }

    public function update()
    {
        $model = new ServiceModel();

        $model->mapData($_GET);

        $model->one("where id=$model->id");

        $this->view->render('updateService', 'main', $model);
    }

    public function processUpdate()
    {
        $model = new ServiceModel();

        $model->mapData($_POST);

        $model->validate();

        if ($model->errors)
        {
            Application::$app->session->set('errorNotification', 'Service not updated!');
            $this->view->render('updateService', 'main', $model);
            exit;
        }

        $model->update("where id=$model->id");
        Application::$app->session->set('successNotification', 'Service updated!');

        header("location:" . "/services");
    }



    public function accessRole()
    {
        return ["Administrator"];
    }
}