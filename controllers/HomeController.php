<?php

namespace app\controllers;

use app\core\BaseController;

class HomeController extends BaseController
{
    public function home()
    {
        return $this->view->render('home', 'main', null);
    }

    public function about()
    {
        return $this->view->render('getUser', 'main', null);
    }
}