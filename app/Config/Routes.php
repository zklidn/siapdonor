<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/home', 'Home::index');
$routes->get('/about_us', 'Home::about_us');

$routes->get('/darah/(:any)','HalamanAwal::darah_suci/$1');
$routes->get('/cuaca/(:any)/(:any)','DashboardPMI::matahari/$1/$2');
$routes->get('/tampilan','HalamanAwal::tampilanbaru');



/*------------------halaman awal----------------*/
$routes->get('/awalan', 'Awalan::index');

/*------------------login----------------*/
$routes->get('/login', 'Login::index');
$routes->post('/login/proses', 'Login::proses');

/*------------------register---------------*/
$routes->get('/register', 'Register::index');
$routes->post('/register/proses', 'register::proses');

/*------------------verifikasi---------------*/
$routes->get('/verifikasi', 'Verifikasi::index');

/*------------------dashboard---------------*/
$routes->get('/dashboard', 'Dashboard::index');

