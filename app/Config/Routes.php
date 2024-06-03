<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// login
$routes->get('/', 'auth::index');
$routes->POST('/home', 'auth::loginUser');

$routes->get('/home', 'dashboardController::index');
$routes->get('/petunjuk', 'petunjukController::index');
$routes->get('/pengembang', 'pengembangController::index');
// desa
$routes->get('/desaPancoh', 'desaController::pancoh');
$routes->get('/desaKelor', 'desaController::kelor');
$routes->get('/desaNganggring', 'desaController::nganggring');
$routes->get('/desaGamplong', 'desaController::gamplong');
$routes->get('/desaKampungIklim', 'desaController::kampungIklim');
