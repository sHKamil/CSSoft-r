<?php

use App\Controllers\CompanyController;
use App\Controllers\HomeController;

$router->get('/',HomeController::class, 'index');
$router->get('/firma',CompanyController::class, 'index');
$router->post('/firma',CompanyController::class, 'createCompany');

