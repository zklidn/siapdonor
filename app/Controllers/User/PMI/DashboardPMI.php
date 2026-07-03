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

        $data['permintaanMasuk'] = $permintaanModel->countAllResults();

        $data['aktivitas'] = $logModel
            ->orderBy('id', 'DESC')
            ->findAll(5);

        return view('Tampilan_PMI/dashboard_PMI', $data);
    }

    
}