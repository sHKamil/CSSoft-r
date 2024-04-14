<?php

use App\Controllers\CompanyController;
use App\Controllers\EmployeeController;
use App\Controllers\HomeController;

$router->get('/', HomeController::class, 'index');

$router->get('/firma', CompanyController::class, 'index');
$router->post('/firma', CompanyController::class, 'createCompany');

$router->get('/pracownik', EmployeeController::class, 'index');
$router->post('/pracownik', EmployeeController::class, 'createEmployee');
