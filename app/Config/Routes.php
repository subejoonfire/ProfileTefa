<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Routes::index');
$routes->get('/about', 'Routes::about');
$routes->get('/contact', 'Routes::contact');
