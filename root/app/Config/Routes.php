<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/home', 'Home::index');
$routes->get('/solutions', 'Home::solutions');
$routes->get('/pricing', 'Home::pricing');
$routes->get('/pricing/(:any)', 'Home::pricing/$1');
$routes->get('/contact', 'Home::contact');
$routes->get('/about-us', 'Home::aboutUs');
$routes->get('/locale', 'Home::locale');

// POST
$routes->post('/submit-contact-form', 'Home::submitContactForm');
// LOCALE
$routes->group('{locale}', ['filter' => 'localeGuard'], static function($routes) {
    $routes->get('home', 'Home::index');
    $routes->get('solutions', 'Home::solutions');
    $routes->get('pricing', 'Home::pricing');
    $routes->get('pricing/(:any)', 'Home::pricing/$1');
    $routes->get('contact', 'Home::contact');
    $routes->get('about-us', 'Home::aboutUs');
    $routes->get('locale', 'Home::locale');
});
$routes->get('/', 'Home::underConstruction');
$routes->set404Override('App\Controllers\Home::show404');