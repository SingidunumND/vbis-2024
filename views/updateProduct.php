<?php

use app\core\Form;
use app\models\ProductModel;

/** @var $params ProductModel */
$form = new Form();
?>

<div class="card">
    <form action="/processUpdateProduct" method="post">
        <input type="hidden" name="id" value="<?php echo $params->id ?>">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Edit Product</p>
                <button class="btn btn-success btn-sm ms-auto" type="submit">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">Product Information</p>
            <div class="row">
                <div class="col-md-12">
                    <?php $form->renderInputForm("text", "Name","name", $params);?>
                </div>
                <div class="col-md-6">
                    <?php $form->renderInputForm("text", "Description","description", $params);?>
                </div>
            </div>
        </div>
    </form>
</div>