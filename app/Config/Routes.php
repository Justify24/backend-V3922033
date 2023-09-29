<?php

use App\Controllers\ProductController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('insertkomponen', 'ProductController::insertKomponen');
$routes->get('viewkomponen', 'ProductController::readKomponen');
$routes->get('editkomponen/(:any)', 'ProductController::getKomponen/$1');
$routes->post('updatekomponen/(:any)', 'ProductController::updateKomponen/$1');
$routes->get('deletekomponen/(:any)', 'ProductController::deleteKomponen/$1');

