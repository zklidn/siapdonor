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

// Blok $routes->group('dashboard', ...) DIHAPUS SAJA


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
/*------------------dashboard RS---------------*/
// UBAH filternya menjadi auth:rumah_sakit
$routes->group('rs',['filter' => 'auth:rumah_sakit'], static function ($routes) {
    $routes->get('/', 'DashboardRS::rs');
    $routes->get('cari_donor', 'DashboardRS::cari_donor');
    $routes->get('data_pasien', 'DashboardRS::data_pasien');
    $routes->get('permintaan_darah', 'DashboardRS::permintaan_darah');
    $routes->get('riwayat_permintaan', 'DashboardRS::riwayat_permintaan');
    $routes->get('laporan_rs', 'DashboardRS::laporan_rs');
    $routes->get('buat_permintaan', 'DashboardRS::buat_permintaan');
    $routes->get('notifikasi', 'DashboardRS::notifikasi_rs');
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
    $routes->get('profil', 'Profil::profil' );
});
    /*------------------post-----------------------------*/


$routes->get('/logout', 'Login::logout');
#akun gw
$routes->get('hash', 'Hash::index');

$routes->get('coba', 'uji::index');