<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\AdminReportController;
use app\controllers\AuthController;
use app\controllers\ReservationController;
use app\controllers\ServiceController;
use app\controllers\UserController;
use app\controllers\HomeController;
use app\controllers\ProductController;
use app\controllers\UserReportController;
use app\controllers\UserServiceController;
use app\core\Application;


$app = new Application();
//Home
$app->router->get('/', [HomeController::class, 'home']);
//Users
$app->router->get('/getUser', [UserController::class, 'readUser']);
$app->router->get('/users', [UserController::class, 'readAll']);
$app->router->get('/updateUser', [UserController::class, 'updateUser']);
$app->router->post('/processUpdateUser', [UserController::class, 'processUpdateUser']);
$app->router->get('/createUser', [UserController::class, 'createUser']);
$app->router->post('/processCreateUser', [UserController::class, 'processCreateUser']);
//Products
$app->router->get('/products', [ProductController::class, 'products']);
$app->router->get('/updateProduct', [ProductController::class, 'update']);
$app->router->post('/processUpdateProduct', [ProductController::class, 'processUpdate']);
//Authentication
$app->router->get('/accessDenied', [AuthController::class, 'accessDenied']);
$app->router->get('/registration', [AuthController::class, 'registration']);
$app->router->post('/processRegistration', [AuthController::class, 'processRegistration']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/processLogin', [AuthController::class, 'processLogin']);
$app->router->get('/processLogout', [AuthController::class, 'processLogout']);
//Services
$app->router->get('/services', [ServiceController::class, 'list']);
$app->router->get('/updateService', [ServiceController::class, 'update']);
$app->router->post('/processUpdateService', [ServiceController::class, 'processUpdate']);
$app->router->get('/createService', [ServiceController::class, 'create']);
$app->router->post('/processCreateService', [ServiceController::class, 'processCreate']);
//User Services
$app->router->get('/serviceForUser', [UserServiceController::class, 'listForUsers']);
//Reservation
$app->router->post('/processReservation', [ReservationController::class, 'processReservation']);
//Report
$app->router->get('/myReport', [UserReportController::class, 'myReport']);
$app->router->get("/getNumberOfReservationsPerMonth",[UserReportController::class, 'getNumberOfReservationsPerMonth']);
$app->router->get("/getPricePerMonth",[UserReportController::class, 'getPricePerMonth']);
//Admin Report
$app->router->get("/adminReport",[AdminReportController::class, 'adminReport']);
$app->router->get("/getPricePerUser",[AdminReportController::class, 'getPricePerUser']);

$app->run();
