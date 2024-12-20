<?php

use app\core\Form;
use app\core\Application;
use app\models\LoginModel;

/** @var $params LoginModel */
$form = new Form();
?>

<div class="card card-plain">
    <div class="card-header pb-0 text-start">
        <h4 class="font-weight-bolder">Sign In</h4>
        <p class="mb-0">Enter your email and password to sign in</p>
    </div>
    <div class="card-body">
        <form role="form" method="post" action="/processLogin">
            <?php $form->renderLoginForm("email",$params);?>
            <?php $form->renderLoginForm("password",$params);?>
            <div class="text-center">
                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center pt-0 px-lg-2 px-1">
        <p class="mb-4 text-sm mx-auto">
            Don't have an account?
            <a href="/registration" class="text-primary text-gradient font-weight-bold">Sign up</a>
        </p>
    </div>
</div>
