<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController; // Tambahkan ini agar BaseController tetap terbaca

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

        //total permintaan
        $data['total_permintaan'] = $permintaanModel->countAllResults();

        //permintaan baru 
        $data['permintaan_masuk'] = $permintaanModel
            ->where('status', 'Baru')
            ->countAllResults();

        //diproses
        $data['diproses'] = $permintaanModel
            ->where('status', 'Diproses')
            ->countAllResults();
        
        //Donor Ditemukan
        $data['donor_ditemukan'] = $permintaanModel
            ->where('status', 'Donor Ditemukan')
            ->countAllResults();

        //$selsai
        $data['selesai'] = $permintaanModel
            ->where('status', 'Selesai')
            ->countAllResults();
        
        //ditolak
        $data['ditolak'] = $permintaanModel
            ->where('status', 'Ditolak')
            ->countAllResults();

        //Permintaan Terbaru
        $data['permintaan_terbaru'] = $permintaanModel
            ->select('permintaan_darah.*, users.nama AS nama_rs')
            ->join('users', 'users.id = permintaan_darah.id_user')
            ->where('users.role', 'rumah_sakit')
            ->orderBy('permintaan_darah.created_at', 'DESC')
            ->findAll(5);
        
        $data['aktivitas'] = $logModel
            ->orderBy('id', 'DESC')
            ->findAll(5);

        //

        return view('Tampilan_PMI/dashboard_PMI', $data);
    }

    
}