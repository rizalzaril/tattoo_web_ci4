<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

// APPOINTMENT FORM
$routes->get('/make_appointment', 'HomeController::make_appointment');

$routes->post('/book-appointment', 'HomeController::bookAppointment');

// cek jadwal
$routes->get('/check_schedule', 'HomeController::check_schedule');
// $routes->match(['get', 'post'], 'send_email', 'HomeController::bookAppointment');
