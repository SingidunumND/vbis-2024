<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;
use app\models\ReservationModel;
use app\models\ServiceModel;

class ReservationController extends BaseController
{
    public function processReservation()
    {
        $model = new ReservationModel();

        $model->mapData($_POST);

        $model->one("where reservation_time='$model->reservation_time' and id_service=$model->id_service");

        if (isset($model->id)) {
            Application::$app->session->set('errorNotification', 'Reservation already exists for that date!');
            header("location:" . "/serviceForUser");
            exit;
        }

        if ($model->reservation_time == '') {
            Application::$app->session->set('errorNotification', 'Please pick a date and time for reservation!');
            header("location:" . "/serviceForUser");
            exit;
        }

        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session)
        {
                $model->id_user = $session['id_user'];
        }

        $serviceModel=new ServiceModel();
        $serviceModel->one("where id='$model->id_service'");
        $model->price=$serviceModel->price;

        $model->insert();
        Application::$app->session->set('successNotification', 'Reservation created!');

        header("location:" . "/");
    }

    public function accessRole()
    {
        return ['Korisnik','Administrator'];
    }
}