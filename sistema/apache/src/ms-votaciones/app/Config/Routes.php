<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->options('/(:any)', 'Cvotaciones::options'); // 🔹 Manejo de pre-flight requests para CORS

 // 🔹 Rutas RESTful para obtener datos (usar `GET`)
 $routes->get('/votaciones/resultados/(:num)', 'Cvotaciones::buscaresultados/$1'); // GET con parámetro (ID del participante)
 $routes->get('/votaciones/porcentaje', 'Cvotaciones::porcentajevotos'); // GET sin parámetro
 $routes->get('/votaciones/total', 'Cvotaciones::totaldatos'); // GET sin parámetro
 $routes->get('/listavotaciones', 'Cvotaciones::listavotaciones'); // GET sin parámetro
 
 // 🔹 Rutas RESTful para enviar datos (usar `POST`)
 $routes->post('/votaciones/visita', 'Cvotaciones::registrarVisita'); // POST para registrar visita
 $routes->post('/votaciones/voto', 'Cvotaciones::registrarVoto'); // POST para registrar voto

 $routes->delete('/borravoto', 'Cvotaciones::borrarVoto');

 
