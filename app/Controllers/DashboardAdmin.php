<?php

namespace App\Controllers;

class DashboardAdmin extends BaseController
{
    // Ubah nama fungsi dari admin() menjadi index() agar sesuai dengan Routes
    public function admin()
    {
        // Memanggil file: app/Views/Tampilan_Admin/dashboard.php
        return view('Tampilan_Admin/dashboard');
    }
     
    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    // Fungsi untuk halaman data donor
    public function data_donor()
    {
        // Memanggil file: app/Views/Tampilan_Admin/data_donor.php
        return view('Tampilan_Admin/data_donor');
    }

    // Fungsi untuk halaman cari donor
    public function cari_donor()
    {
        // Memanggil file: app/Views/Tampilan_Admin/cari_donor.php
        return view('Tampilan_Admin/cari_donor');
    }

     // Fungsi untuk halaman kelola user
    public function kelola_user()
    {
        // Memanggil file: app/Views/Tampilan_Admin/kelola_user.php
        return view('Tampilan_Admin/kelola_user');
    }

    public function riwayat()
    {
        // Memanggil file: app/Views/Tampilan_Admin/kelola_user.php
        return view('Tampilan_Admin/riwayat_aktifitas');
    }
}