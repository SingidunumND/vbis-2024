<?php
use app\models\UserModel;

/** @var $params UserModel */

foreach ($params as $user) {
    echo $user['email'];
}

?>

<div class="card">
    <div class="card-header pb-0">
        <h6>Users</h6>
    </div>

    <div class="card-body">
        <h1><?php echo $params->first_name ?? "NOT FOUND"?> <?php echo $params->last_name ?? "NOT FOUND"?> <br> <?php echo $params->email ?? "NOT FOUND"?></h1>
    </div>
</div>
