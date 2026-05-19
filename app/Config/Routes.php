
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

/*------------------dashboard admin---------------*/
// Mengelompokkan semua URL yang berawalan '/admin'
$routes->group('admin', static function ($routes) {
    // URL: localhost:8080/admin
    $routes->get('/', 'DashboardAdmin::index');
    
    // URL: localhost:8080/admin/data_donor
    $routes->get('data_donor', 'DashboardAdmin::data_donor');
    
    // URL: localhost:8080/admin/cari_donor
    $routes->get('cari_donor', 'DashboardAdmin::cari_donor');
});