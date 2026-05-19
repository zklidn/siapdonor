
<?php

use CodeIgniter\Router\RouteCollection;

/*------------------halaman awal----------------*/
$routes->get('/', 'Awalan::index');
$routes->get('/awalan', 'Awalan::index');

/*------------------login----------------*/
$routes->get('/login', 'Login::index');
$routes->post('/login/proses', 'Login::proses');

/*------------------register---------------*/
$routes->get('/register', 'Register::index');
$routes->post('/register/proses', 'Register::proses'); // Gunakan R besar

/*------------------verifikasi---------------*/
$routes->get('/verifikasi', 'Verifikasi::index');

/*------------------dashboard---------------*/
$routes->get('/dashboard', 'Dashboard::index');
// Hapus duplikat rute dashboard di bawahnya