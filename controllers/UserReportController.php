<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\ReportModel;

class UserReportController extends BaseController
{

    public function myReport()
    {
        $this->view->render('myReport', 'main', null);
    }

    public function getNumberOfReservationsPerMonth()
    {
        $model=new ReportModel();
        $model->getNumberOfReservationsPerMonth();
    }

    public function getPricePerMonth()
    {
        $model=new ReportModel();
        $model->getPricePerMonth();
    }

    public function accessRole()
    {
        return ["Korisnik", "Administrator"];
    }
}