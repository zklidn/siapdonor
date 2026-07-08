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
/*------------------verifikasi---------------*/
$routes->get('/verifikasi', 'Verifikasi::index');

// Tambahkan di area rute publik kamu
$routes->post('/profile/simpan_biodata', 'Biodata::simpan_biodata');


/*------------------dashboard admin---------------*/
$routes->group('admin', ['filter' => 'auth:admin'], static function ($routes) {
    $routes->get('/', 'DashboardAdmin::admin');
    $routes->get('data_donor', 'DashboardAdmin::data_donor');
    $routes->get('kelola_user', 'DashboardAdmin::kelola_user');
    $routes->get('riwayat', 'DashboardAdmin::riwayat');
    $routes->post('donor', 'DashboardAdmin::donor');
    $routes->get('profil', 'DashboardAdmin::profil_admin');
    $routes->get('notifikasi', 'DashboardAdmin::notifikasi_admin');
});

/*------------------dashboard RS (VERSI FIX SINKRON)---------------*/
$routes->group('rs', ['filter' => 'auth:rumah_sakit'], static function ($routes) {
    $routes->get('/', 'DashboardRS::rs');
    $routes->get('cari_donor', 'DashboardRS::cari_donor'); 
    $routes->get('data_pasien', 'DashboardRS::data_pasien');
    $routes->get('permintaan_darah', 'DashboardRS::kelola_permintaan'); 
    $routes->get('riwayat_permintaan', 'DashboardRS::riwayat_permintaan');
    $routes->get('laporan_rs', 'DashboardRS::laporan_rs');
    $routes->get('buat_permintaan', 'DashboardRS::buat_permintaan');
    $routes->get('notifikasi', 'DashboardRS::notifikasi_rs');
    $routes->get('settings', 'DashboardRS::settings_rs'); 
    
    // RUTE BARU: Untuk halaman detail membawa ID Permintaan secara dinamis (:any)
    $routes->get('detail_permintaan/(:any)', 'DashboardRS::detail_permintaan/$1');
});


/*------------------dashboard PMI---------------*/
$routes->group('pmi', ['filter' => 'auth:pmi'], static function ($routes) {
    $routes->get('/', 'DashboardPMI::pmi');
    $routes->get('data_pendonor', 'DashboardPMI::data_pendonor');
    $routes->get('laporan', 'DashboardPMI::laporan');
    $routes->get('permintaan_darah', 'DashboardPMI::permintaan_darah');
    $routes->get('riwayat_donor', 'DashboardPMI::riwayat_donor');
    $routes->get('stok_darah', 'DashboardPMI::stok_darah');
    $routes->get('tambah_donor', 'DashboardPMI::tambah_donor');
    $routes->get('detail', 'DashboardPMI::detail');
    $routes->get('notifikasi', 'DashboardPMI::notifikasi_pmi');
});

$routes->get('/logout', 'Login::logout');
#akun gw
$routes->get('hash', 'Hash::index');