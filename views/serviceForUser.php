<?php

use app\models\ServiceModel;

/** @var $params ServiceModel */
?>

<div class="overflow-scroll pt-7" style="max-height: 100vh;">

    <?php
    foreach ($params as $param) {
        echo '
        <div class="card mb-3 ms-3 me-3">
        <form action="/processReservation" method="post">
        <input type="hidden" name="id_service" value="'."$param[id]".'">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="'."$param[image_name]".'" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body p-2">
                    <p class="card-title p-0 m-0">'."$param[service_name]".'</p>
                    <p class="card-text p-0 m-0">'."$param[salon_name] - $param[location]".'</p>
                </div>
                <div class="card-footer p-2">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center align-content-center center">
                            <input type="date" class="form-control" name="reservation_time"/>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <button class="btn btn-sm btn-primary mb-0">Reservation</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
        ';
    }
    ?>
</div>


