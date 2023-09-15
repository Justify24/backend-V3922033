<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('insertkomponen', 'ProductController::insertKomponen');
$routes->get('viewkomponen', 'ProductController::readKomponen');

