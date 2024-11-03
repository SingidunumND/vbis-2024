<?php
use app\models\UserModel;

/** @var $params UserModel */
?>

<div class="card">
    <div class="card-body">
        <h1><?php echo $params->first_name ?> <?php echo $params->last_name ?> <br> <?php echo $params->email ?></h1>
    </div>
</div>

