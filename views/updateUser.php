<?php

use app\core\Form;
use app\models\UserModel;

/** @var $params UserModel */
$form = new Form();
?>

<div class="card">
    <form action="/processUpdateUser" method="post">
        <input type="hidden" name="id" value="<?php echo $params->id ?>">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Edit Profile</p>
                <button class="btn btn-success btn-sm ms-auto" type="submit">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">User Information</p>
            <div class="row">
                <div class="col-md-12">
                    <?php $form->renderInputForm("email", "email", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text", "first_name", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text", "last_name", $params);?>
                </div>
            </div>
        </div>
    </form>
</div>