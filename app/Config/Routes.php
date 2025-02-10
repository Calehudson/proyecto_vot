<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

$routes->get('/', 'Cvotacion::index');
$routes->post('votacion/vote', 'Cvotacion::vote');


