<?php

namespace app\core;

abstract class BaseController
{
    public View $view;

    public function __construct()
    {
        $this->view = new View();

        $controllerRoles = $this->accessRole();
        $sessionUserData=Application::$app->session->get('user');

        if ($controllerRoles == []) {
            return;
        }

        //header("location:"."/login");
    }

    abstract public function accessRole();
}