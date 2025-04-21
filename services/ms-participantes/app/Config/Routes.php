<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


/**
 * @var RouteCollection $routes
 */
$routes->get('/lista', 'Cparticipantes::index');

