<?php

namespace App\Controllers;

use App\Models\PermintaanDarahModel;

class DashboardRS extends BaseController
{
    // Halaman utama Dashboard RS
    public function rs()
    {
        return view('Tampilan_RS/dashboard_RS');
    }

    // Halaman Cari Donor
    public function cari_donor()
    {
        return view('Tampilan_RS/permintaan_darah');
    }

    // Halaman Data Pasien
    public function data_pasien()
    {
        return view('Tampilan_RS/data_pasien');
    }

    // Halaman Kelola Permintaan Darah RS
    public function kelola_permintaan()
    {
        $status = $this->request->getGet('status') ?? 'aktif';
        $model = new PermintaanDarahModel();
        
        if ($status == 'aktif') {
            $model->whereIn('status', ['Baru', 'Proses']);
        } elseif ($status == 'selesai') {
            $model->where('status', 'Selesai');
        } elseif ($status == 'draft') {
            $model->where('status', 'Draft');
        }
    
        $data['permintaan_darah_all'] = $model->findAll();
        return view('Tampilan_RS/permintaan_darah', $data);
    }

    // Halaman Riwayat Permintaan
    public function riwayat_permintaan()
    {
        return view('Tampilan_RS/riwayat_permintaan'); 
    }

    // Halaman Laporan RS
    public function laporan_rs()
    {
        return view('Tampilan_RS/laporan_RS'); 
    }

    // Halaman Buat Permintaan Baru
    public function buat_permintaan()
    {
        return view('Tampilan_RS/buat_permintaan');
    }

    // Halaman Notifikasi
    public function notifikasi_rs()
    {
        return view('Tampilan_RS/notifikasi');
    }

    // Halaman Settings
    public function settings_rs()
    {
        return view('Tampilan_RS/settings');
    }

    // FUNGSI BARU: Memanggil file views detail_permintaan.php
    public function detail_permintaan($id)
    {
        // Parameter $id dikirim agar nanti tim backend bisa mengambil data spesifik berdasarkan ID
        $data['id_permintaan'] = $id;
        
        return view('Tampilan_RS/detail_permintaan', $data);
    }
}