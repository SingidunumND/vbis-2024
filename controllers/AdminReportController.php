<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\ReportModel;

class AdminReportController extends BaseController
{

    public function adminReport()
    {
        $this->view->render('adminReport', 'main', null);
    }

    public function getPricePerUser()
    {
        $model=new ReportModel();
        $model->mapData($_GET);
        $model->getPricePerUser();
    }

    public function accessRole()
    {
        return ["Administrator"];
    }
}