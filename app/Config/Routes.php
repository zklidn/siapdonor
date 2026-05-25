
<?php

use CodeIgniter\Router\RouteCollection;

/*------------------halaman awal----------------*/
$routes->get('/', 'Awalan::index');
$routes->get('/awalan', 'Awalan::index');

/*------------------login----------------*/
$routes->get('/login', 'Login::login');
$routes->post('/login/proses', 'Login::proses');

/*------------------register---------------*/
$routes->get('/register', 'Register::register');
$routes->post('/register/proses', 'Register::proses');

/*------------------verifikasi---------------*/
$routes->get('/verifikasi', 'Verifikasi::index');

/*------------------dashboard---------------*/
$routes->get('/dashboard', 'Dashboard::index');


/*------------------dashboard admin---------------*/
// Mengelompokkan semua URL yang berawalan '/admin'
$routes->group('admin', static function ($routes) {
    // URL: localhost:8080/admin
    $routes->get('/', 'DashboardAdmin::index');
    
    // URL: localhost:8080/admin/data_donor
    $routes->get('data_donor', 'DashboardAdmin::data_donor');
    
    // URL: localhost:8080/admin/cari_donor
    $routes->get('cari_donor', 'DashboardAdmin::cari_donor');

     // URL: localhost:8080/admin/kelola_user
    $routes->get('kelola_user', 'DashboardAdmin::kelola_user');
});


/*------------------dashboard RS---------------*/
// Mengelompokkan semua URL untuk Rumah Sakit (RS)
$routes->group('rs', static function ($routes) {
    // URL: localhost:8080/rs
    $routes->get('/', 'DashboardRS::index');
    
    // URL: localhost:8080/rs/cari_donor
    $routes->get('cari_donor', 'DashboardRS::cari_donor');
    
    // URL: localhost:8080/rs/data_pasien
    $routes->get('data_pasien', 'DashboardRS::data_pasien');
    
    // URL: localhost:8080/rs/permintaan_darah
    $routes->get('permintaan_darah', 'DashboardRS::permintaan_darah');
    
    // URL: localhost:8080/rs/riwayat_permintaan
    $routes->get('riwayat_permintaan', 'DashboardRS::riwayat_permintaan');
});



/*------------------dashboard PMI---------------*/
// Mengelompokkan semua URL untuk PMI
$routes->group('pmi', static function ($routes) {
    // URL: localhost:8080/pmi
    $routes->get('/', 'DashboardPMI::index');
    
    // URL: localhost:8080/pmi/data_pendonor
    $routes->get('data_pendonor', 'DashboardPMI::data_pendonor');
    
    // URL: localhost:8080/pmi/laporan
    $routes->get('laporan', 'DashboardPMI::laporan');
    
    // URL: localhost:8080/pmi/permintaan_darah
    $routes->get('permintaan_darah', 'DashboardPMI::permintaan_darah');
    
    // URL: localhost:8080/pmi/riwayat_donor
    $routes->get('riwayat_donor', 'DashboardPMI::riwayat_donor');
    
    // URL: localhost:8080/pmi/stok_darah
    $routes->get('stok_darah', 'DashboardPMI::stok_darah');
});