<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

//for prtfolio

//home
$routes->get('/', 'Portfolio::index');

//about me
$routes->get('/me', 'Portfolio::me');

//contacts
$routes->get('/contacts', 'Portfolio::contacts');

//js

