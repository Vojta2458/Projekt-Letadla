<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/detail/(:num)', 'Home::detail/$1');

$routes->get('pridat', 'Letadla::pridat');
$routes->post('pridat/hotovo', 'Letadla::pridat_hotovo');

