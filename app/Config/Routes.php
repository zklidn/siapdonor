<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*------------------halaman awal----------------*/
$routes->get('/', 'Awalan::index');

/*------------------login----------------*/
$routes->get('/login', 'Login::login');
$routes->post('/login/proses', 'Login::processLogin');

/*------------------register---------------*/
$routes->get('/register', 'Register::index');
$routes->post('/register/proses', 'Register::proses');

/*------------------verifikasi---------------*/
$routes->get('/verifikasi', 'Verifikasi::index');

// Blok $routes->group('dashboard', ...) DIHAPUS SAJA


/*------------------dashboard admin---------------*/
$routes->group('admin', static function ($routes) {
    $routes->get('/', 'DashboardAdmin::admin');
    $routes->get('data_donor', 'DashboardAdmin::data_donor');
    $routes->get('cari_donor', 'DashboardAdmin::cari_donor');
    $routes->get('kelola_user', 'DashboardAdmin::kelola_user');
    $routes->get('riwayat', 'DashboardAdmin::riwayat');
});


/*------------------dashboard RS---------------*/
$routes->group('rs', static function ($routes) {
    $routes->get('/', 'DashboardRS::rs');
    $routes->get('cari_donor', 'DashboardRS::cari_donor');
    $routes->get('data_pasien', 'DashboardRS::data_pasien');
    $routes->get('permintaan_darah', 'DashboardRS::permintaan_darah');
    $routes->get('riwayat_permintaan', 'DashboardRS::riwayat_permintaan');
});


/*------------------dashboard PMI---------------*/
$routes->group('pmi', static function ($routes) {
    $routes->get('/', 'DashboardPMI::pmi');
    $routes->get('data_pendonor', 'DashboardPMI::data_pendonor');
    $routes->get('laporan', 'DashboardPMI::laporan');
    $routes->get('permintaan_darah', 'DashboardPMI::permintaan_darah');
    $routes->get('riwayat_donor', 'DashboardPMI::riwayat_donor');
    $routes->get('stok_darah', 'DashboardPMI::stok_darah');
});