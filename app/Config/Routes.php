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
$routes->group('admin', ['namespace' => 'App\Controllers\Admin','filter'    => 'auth:admin'
], static function ($routes) {

    $routes->get('/', 'DashboardAdmin::admin');
    $routes->get('data_donor', 'DataDonorAdmin::data_donor');
    $routes->get('kelola_user', 'KelolaAdmin::kelola_user');
    $routes->get('riwayat', 'RiwayatAdmin::riwayat');
    $routes->get('profil', 'ProfilAdmin::profil_admin');
    $routes->get('notifikasi', 'NotifikasiAdmin::notifikasi_admin');
}); 

/*------------------dashboard RS---------------*/
$routes->group('rs', ['namespace' => 'App\Controllers\User\RS', 'filter' => 'auth:rumah_sakit'], static function ($routes) {
    
    $routes->get('/', 'DashboardRS::index');
    
    $routes->get('cari_donor', 'CariDonor::index');
    $routes->get('data_pasien', 'DataPasien::index');
    
    // --- Modul Permintaan Darah yang sudah dipisah ---
    $routes->get('permintaan_darah', 'PermintaanDarah::index');
    $routes->get('detail_permintaan/(:segment)', 'DetailPermintaan::index/$1');
    $routes->get('riwayat_permintaan', 'RiwayatPermintaan::index');
    $routes->get('buat_permintaan', 'BuatPermintaan::index');
    // -------------------------------------------------
    
    $routes->get('laporan_rs', 'Laporan::index');
    $routes->get('notifikasi', 'Notifikasi::index');
    $routes->get('settings', 'Settings::index');
});

/*------------------dashboard PMI---------------*/
// Tambahkan 'filter' => 'nama_filter_kamu' di dalam array
$routes->group('pmi', ['namespace' => 'App\Controllers\User\PMI', 'filter' => 'auth:pmi'], static function ($routes) {

    $routes->get('/', 'DashboardPMI::pmi');
    
    // Dashboard
    $routes->get('dashboard', 'DashboardPMI::pmi');

    // Pendonor
    $routes->get('data_pendonor', 'Pendonor::pendonor');
    $routes->get('tambah_donor', 'Pendonor::tambah');
    $routes->get('riwayat_donor', 'Pendonor::riwayat');

    // Permintaan Darah
    $routes->get('permintaan_darah', 'Permintaandarah::permintaan');
    $routes->get('detail_permintaan', 'Permintaandarah::detail');

    // Stok Darah
    $routes->get('stok_darah', 'Stockdarah::stock');

    // Laporan & Notifikasi
    $routes->get('laporan', 'Laporan::laporan');
    $routes->get('notifikasi', 'Notifikasi::notifikasi');
});
    /*------------------post-----------------------------*/


$routes->get('/logout', 'Login::logout');
#akun gw
$routes->get('hash', 'Hash::index');

$routes->get('coba', 'uji::ulang');
