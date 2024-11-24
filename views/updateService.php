<?php

use app\core\Form;
use app\models\ServiceModel;

/** @var $params ServiceModel */
$form = new Form();
?>

<div class="card">
    <form action="/processUpdateService" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $params->id ?>">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Edit Service</p>
                <button class="btn btn-success btn-sm ms-auto" type="submit">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">Service Information</p>
            <div class="row">
                <div class="col-md-12">
                    <?php $form->renderInputForm("text","Service name", "service_name", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text", "Salon name","salon_name", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text", "Location","location", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("file","Image", "file", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text","Price", "price", $params);?>
                </div>
            </div>
        </div>
    </form>
</div>