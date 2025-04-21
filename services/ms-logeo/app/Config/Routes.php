<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


/**
 * @var RouteCollection $routes
 */
$routes->post('/usuarios/login', 'Clogeo::login');




