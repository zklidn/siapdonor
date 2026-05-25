<?php

namespace App\Controllers;

class DashboardAdmin extends BaseController
{
    // Fungsi default saat controller ini dipanggil
    public function index()
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
}