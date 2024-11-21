<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;
use app\models\ReservationModel;

class ReservationController extends BaseController
{
    public function processReservation()
    {
        $model = new ReservationModel();

        $model->mapData($_POST);

        $model->one("where date(reservation_time)='$model->reservation_time' and id_service=$model->id_service");

        if (isset($model->id)) {
            Application::$app->session->set('errorNotification', 'Reservation already exists for that date!');
            header("location:" . "/serviceForUser");
            exit;
        }

        $sessions = Application::$app->session->get('user');

        foreach ($sessions as $session)
        {
                $model->id_user = $session['id_user'];
        }

        $model->insert();
        Application::$app->session->set('successNotification', 'Reservation created!');

        header("location:" . "/");
    }

    public function accessRole()
    {
        return ['Korisnik','Administrator'];
    }
}