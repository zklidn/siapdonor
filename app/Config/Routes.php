
<?php

use CodeIgniter\Router\RouteCollection;

/*------------------halaman awal----------------*/
$routes->get('/', 'Awalan::index');
$routes->get('/awalan', 'Awalan::index');

/*------------------login----------------*/
$routes->get('/login', 'Login::index');
$routes->post('/login/proses', 'Login::proses');
$routes->post('/login/regis', 'Login::regis');

/*------------------register---------------*/
$routes->get('/register', 'Register::index');

/*------------------verifikasi---------------*/
$routes->get('/verifikasi', 'Verifikasi::index');

/*------------------dashboard---------------*/
$routes->get('/dashboard', 'Dashboard::index');
// Hapus duplikat rute dashboard di bawahnya

