<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index');
$routes->get('/about_us', 'Home::about_us');

$routes->get('/darah/(:any)','HalamanAwal::darah_suci/$1');
$routes->get('/cuaca/(:any)/(:any)','DashboardPMI::matahari/$1/$2');
$routes->get('/tampilan','HalamanAwal::tampilanbaru');

/*------------------login----------------*/
$routes->get('/login', 'Login::index');

/*------------------register---------------*/
$routes->get('/register', 'Register::index');