<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*------------------halaman awal----------------*/
$routes->get('/', 'Awalan::index');


$routes->get('/tentangkami', 'TentangKami::tentang');
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
    $routes->post('update_profil', 'ProfilAdmin::update_profil');
}); 

/*------------------dashboard RS---------------*/
$routes->group('rs', ['namespace' => 'App\Controllers\User\RS', 'filter' => 'auth:rumah_sakit'], static function ($routes) {
    
    $routes->get('/', 'DashboardRS::index');
    
    // --- Modul Permintaan Darah yang sudah dipisah ---
    $routes->get('permintaan_darah', 'PermintaanDarah::index');
    $routes->get('detail_permintaan/(:segment)', 'DetailPermintaan::index/$1');
    $routes->get('riwayat_permintaan', 'RiwayatPermintaan::index');
    $routes->get('buat_permintaan', 'BuatPermintaan::index');
    
    // 👉 INI YANG BIKIN ERROR 404 KEMARIN, WAJIB DITAMBAHKAN:
    $routes->post('simpan_permintaan', 'BuatPermintaan::simpan'); 
    // -------------------------------------------------
    
    $routes->get('laporan_rs', 'Laporan::index');
    $routes->get('notifikasi', 'Notifikasi::index');
    $routes->post('notifikasi/tandai_semua', 'Notifikasi::tandaiSemuaDibaca');
    $routes->get('settings', 'Settings::index');
});

/*------------------dashboard PMI---------------*/
// Tambahkan 'filter' => 'nama_filter_kamu' di dalam array
$routes->group('pmi', ['namespace' => 'App\Controllers\User\PMI', 'filter' => 'auth:pmi'], static function ($routes) {

    $routes->get('/', 'DashboardPMI::pmi');
    
    // Dashboard
    $routes->get('dashboard', 'DashboardPMI::pmi');

    // Pendonor
    $routes->get('cari_donor', 'CariDonor::pendonor');
    $routes->get('riwayat_donor', 'CariDonor::riwayat');
    $routes->get('detail_donor/(:num)', 'CariDonor::detail/$1');

    // tambah donor
    $routes->get('tambah_donor', 'TambahDonor::tambah');
    $routes->post('simpan_pendonor', 'TambahDonor::simpan');


    // Permintaan Darah
    $routes->get('permintaan_masuk', 'PermintaanMasuk::permintaan');
    $routes->get('detail_permintaan/(:segment)', 'PermintaanMasuk::detail/$1');

    // Stok Darah
    $routes->get('stok_darah', 'Stockdarah::stock');

    // update satatus
    $routes->get('update_status_permintaan', 'UpdateStatusPermintaan::update');

    // Laporan & Notifikasi
    $routes->get('laporan', 'Laporan::laporan');
    $routes->get('notifikasi', 'Notifikasi::notifikasi');
    $routes->get('profil', 'Profil::profil' );
});
    /*------------------post-----------------------------*/


$routes->get('/logout', 'Login::logout');
#akun gw
$routes->get('hash', 'Hash::index');

$routes->get('coba', 'uji::ulang');
