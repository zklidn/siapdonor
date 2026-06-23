<?php

namespace App\Controllers;

use App\Models\DonorModel;
use App\Models\PermintaanDarahModel;
use App\Models\LogAktivitasModel;

class DashboardPMI extends BaseController
{
    // Halaman utama Dashboard PMI
    public function pmi()
    {
        $donorModel = new DonorModel();
        $permintaanModel = new PermintaanDarahModel();
        $logModel = new LogAktivitasModel();

        $data['totalDonor'] = $donorModel->countAllResults();
        // Memanggil file: app/Views/Tampilan_PMI/dashboard_PMI.php

        $data['donorAktif'] = $donorModel
            ->where('status', 'aktif')
            ->countAllResults();

        $data['permintaanMasuk'] = $permintaanModel->countAllResults();

        $data['aktivitas'] = $logModel
            ->orderBy('id', 'DESC')
            ->findAll(5);

        return view('Tampilan_PMI/dashboard_PMI', $data);
    }

    // Halaman Data Pendonor
    public function data_pendonor()
    {
        $donorModel = new DonorModel();

        $data['donor'] = $donorModel->findAll();

        return view('Tampilan_PMI/data_pendonor', $data);
    }

    public function tambah_donor()
    {
        return view('Tampilan_PMI/tambah_donor');
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

    public function detail(){
        return view('Tampilan_PMI/detail_permintaan');
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