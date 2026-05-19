<?php

namespace App\Controllers;

class DashboardRS extends BaseController
{
    // Halaman utama Dashboard RS
    public function index()
    {
        return view('Tampilan_RS/dashboard_RS');
    }

    // Halaman Cari Donor
    public function cari_donor()
    {
        return view('Tampilan_RS/cari_donor');
    }

    // Halaman Data Pasien
    public function data_pasien()
    {
        return view('Tampilan_RS/data_pasien');
    }

    // Halaman Permintaan Darah
    public function permintaan_darah()
    {
        return view('Tampilan_RS/permintaan_darah');
    }

    // Halaman Riwayat Permintaan
    public function riwayat_permintaan()
    {
        // Pastikan nama fail di bawah sama persis dengan yang ada dalam folder anda
        return view('Tampilan_RS/riwayat_perminntaan'); 
    }
}