<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/detail/(:num)', 'Home::detail/$1');

$routes->get('vytvorit', 'Letadla::vytvorit');
$routes->post('vytvorit/hotovo', 'Letadla::vytvorit_hotovo');
$routes->get('/editace', 'Letadla::edit');
$routes->delete('/odeber', 'Letadla::delete');
$routes->get('/uprav/(:num)', 'Letadla::editCat/$1');
$routes->put('/upraveni', 'Letadla::upravit/update');

