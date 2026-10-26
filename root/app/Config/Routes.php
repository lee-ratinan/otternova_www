<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::underConstruction');
$routes->get('/home', 'Home::index');
