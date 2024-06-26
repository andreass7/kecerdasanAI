<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// login
// $routes->POST('/home', 'auth::loginUser');
// FORM LOGIN
$routes->get('/', 'auth::index');
$routes->get('/register', 'auth::register');

// user
$routes->get('/home', 'dashboardController::index');
$routes->get('/petunjuk', 'petunjukController::index');
$routes->get('/pengembang', 'pengembangController::index');
$routes->get('/petunjuk-Hitung', 'hitung::petunjukhitung');
$routes->get('/perhitungan', 'hitung::hitung');


// desa
$routes->get('/desaPancoh', 'desaController::pancoh');
$routes->get('/desaKelor', 'desaController::kelor');
$routes->get('/desaNganggring', 'desaController::nganggring');
$routes->get('/desaGamplong', 'desaController::gamplong');
$routes->get('/desaKampungIklim', 'desaController::kampungIklim');

// HITUNG
$routes->POST('/hitung', 'hitung::predict');
