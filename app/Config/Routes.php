<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/luis', 'Home::luis');
$routes->get('/home', 'ConteudoController::index');
$routes->get('/contato', 'ConteudoController::contato');
$routes->get('/quemsou', 'ConteudoController::quemsou');
$routes->get('/produtos', 'ConteudoController::produtos');