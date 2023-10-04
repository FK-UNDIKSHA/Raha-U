<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::home');
$routes->get('/about', 'LandingController::about');
$routes->get('/news', 'LandingController::news');
$routes->get('/pedia', 'LandingController::pedia');
$routes->get('/contact', 'LandingController::contact');
$routes->get('/doctors', 'LandingController::doctors');
$routes->get('/login', 'LandingController::login');

// $routes->get('/', 'LandingController::index');
//$routes->get('/', 'Home::index');