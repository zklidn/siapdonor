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



$routes->get('/biodata', 'Biodata::index');
$routes->post('profile/simpan_biodata', 'Biodata::simpan_biodata');
/*------------------verifikasi---------------*/
$routes->get('/verifikasi', 'Verifikasi::index');

// Blok $routes->group('dashboard', ...) DIHAPUS SAJA


/*------------------dashboard admin---------------*/
/*------------------dashboard admin---------------*/
$routes->group('admin', static function ($routes) {
    $routes->get('/', 'DashboardAdmin::admin');
    $routes->get('data_donor', 'DashboardAdmin::data_donor');
    $routes->get('kelola_user', 'DashboardAdmin::kelola_user');
    $routes->get('riwayat', 'DashboardAdmin::riwayat');
    $routes->post('donor', 'DashboardAdmin::donor');
    
    // Rute untuk kelola aksi Edit dan Hapus User (Sudah Ada)
    $routes->get('hapus_user/(:num)', 'DashboardAdmin::hapus_user/$1');
    $routes->get('edit_user/(:num)', 'DashboardAdmin::edit_user/$1');
    $routes->post('update_user/(:num)', 'DashboardAdmin::update_user/$1');

    // BARU: Rute untuk kelola aksi Lihat, Edit, dan Hapus DATA DONOR
    $routes->get('detail_donor/(:num)', 'DashboardAdmin::detail_donor/$1');
    $routes->get('edit_donor/(:num)', 'DashboardAdmin::edit_donor/$1');
    $routes->post('update_donor/(:num)', 'DashboardAdmin::update_donor/$1');
    $routes->get('hapus_donor/(:num)', 'DashboardAdmin::hapus_donor/$1');
});


/*------------------dashboard RS---------------*/
$routes->group('rs', static function ($routes) {
    $routes->get('/', 'DashboardRS::rs');
    $routes->get('cari_donor', 'DashboardRS::cari_donor');
    $routes->get('data_pasien', 'DashboardRS::data_pasien');
    $routes->get('permintaan_darah', 'DashboardRS::permintaan_darah');
    $routes->get('riwayat_permintaan', 'DashboardRS::riwayat_permintaan');
    $routes->get('laporan_rs', 'DashboardRS::laporan_rs');
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