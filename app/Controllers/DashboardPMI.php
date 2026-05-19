<?php

namespace App\Controllers;

class DashboardPMI extends BaseController
{
    // Halaman utama Dashboard PMI
    public function index()
    {
        return view('Tampilan_PMI/dashboard_PMI');
    }

    // Halaman Data Pendonor
    public function data_pendonor()
    {
        return view('Tampilan_PMI/data_pendonor');
    }

    // Halaman Laporan
    public function laporan()
    {
        return view('Tampilan_PMI/laporan');
    }

    // Halaman Permintaan Darah
    public function permintaan_darah()
    {
        return view('Tampilan_PMI/permintaan_darah');
    }

    // Halaman Riwayat Donor
    public function riwayat_donor()
    {
        return view('Tampilan_PMI/riwayat_donor');
    }

    // Halaman Stok Darah
    public function stok_darah()
    {
        // Pastikan nama file di folder sudah diubah menjadi stok_darah.php
        return view('Tampilan_PMI/stok_darah');
    }
}