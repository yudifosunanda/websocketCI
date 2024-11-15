<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chat/(:any)', 'Websocket::user/$1');


$routes->setAutoRoute(true);
