<?php

namespace App\Controllers;

use App\Models\PermintaanDarahModel;

class DashboardRS extends BaseController
{
    // Halaman utama Dashboard RS
    public function rs()
    {
        // Memanggil file: app/Views/Tampilan_RS/dashboard_RS.php
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
        $status = $this->request->getGet('status') ?? 'aktif';
    
        // 1. Inisialisasi Model yang sudah di-import di atas
        $model = new PermintaanDarahModel();
        
        // 2. Kondisikan query menggunakan Model berdasarkan tab yang diklik
        if ($status == 'aktif') {
            // Menampilkan yang statusnya 'Baru' atau 'Proses'
            $model->whereIn('status', ['Baru', 'Proses']);
        } elseif ($status == 'selesai') {
            // Menampilkan yang statusnya 'Selesai'
            $model->where('status', 'Selesai');
        } elseif ($status == 'draft') {
            // Menampilkan yang statusnya 'Draft'
            $model->where('status', 'Draft');
        }
        // Jika status 'semua', tidak di-filter (menampilkan semua data)
    
        // 3. Ambil data hasil filter dari database
        $data['permintaan_darah_all'] = $model->findAll();
    
        return view('Tampilan_RS/permintaan_darah', $data);
    }

    // Halaman Riwayat Permintaan
    public function riwayat_permintaan()
    {
        // Pastikan nama fail di bawah sama persis dengan yang ada dalam folder anda
        return view('Tampilan_RS/riwayat_permintaan'); 
    }

     public function laporan_rs()
    {
        // Pastikan nama fail di bawah sama persis dengan yang ada dalam folder anda
        return view('Tampilan_RS/laporan_RS'); 
    }

    public function buat_permintaan()
    {
        return view('Tampilan_RS/buat_permintaan');
    }

    public function notifikasi_rs()
    {
        return view('Tampilan_RS/notifikasi');
    }
}