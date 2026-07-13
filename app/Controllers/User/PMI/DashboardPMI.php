<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;
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

        // 1. Data Donor
        $data['totalDonor'] = $donorModel->countAllResults();
        $data['donorAktif'] = $donorModel->where('status', 'aktif')->countAllResults();

        // 2. Data Statistik Status Permintaan
        $data['total_permintaan'] = $permintaanModel->countAllResults();
        $data['permintaan_masuk'] = $permintaanModel->where('status', 'Baru')->countAllResults();
        $data['diproses']         = $permintaanModel->where('status', 'Diproses')->countAllResults();
        $data['donor_ditemukan']  = $permintaanModel->where('status', 'Donor Ditemukan')->countAllResults();
        $data['selesai']          = $permintaanModel->where('status', 'Selesai')->countAllResults();
        $data['ditolak']          = $permintaanModel->where('status', 'Ditolak')->countAllResults();

        // 3. Data Permintaan Terbaru (JOIN 4 TABEL)
        $data['permintaan_terbaru'] = $permintaanModel
            ->select('permintaan_darah.id_permintaan, permintaan_darah.status, permintaan_darah.created_at, 
                      users.nama AS nama_rs, 
                      pasien.golongan_darah, pasien.rhesus, 
                      detail_permintaan.prioritas')
            ->join('users', 'users.id = permintaan_darah.id_user', 'left') 
            ->join('pasien', 'pasien.id_pasien = permintaan_darah.id_pasien') 
            ->join('detail_permintaan', 'detail_permintaan.id_permintaan = permintaan_darah.id_permintaan') 
            ->orderBy('permintaan_darah.created_at', 'DESC')
            ->findAll(5);
        
        // 4. Data Log Aktivitas (PERBAIKAN: Menggunakan 'id' bukan 'id_log')
        $data['aktivitas'] = $logModel->orderBy('id', 'DESC')->findAll(5);

        return view('Tampilan_PMI/dashboard_PMI', $data);
    }
}