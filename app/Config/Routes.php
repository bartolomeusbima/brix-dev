<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->post('subscribe', 'Home::subscribe'); // Handle form submission
$routes->get('home/testDb', 'Home::testDb'); // Defines a route for the testDb method