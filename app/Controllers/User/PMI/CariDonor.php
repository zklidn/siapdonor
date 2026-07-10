<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;
use App\Models\DonorModel; // 👈 WAJIB DITAMBAHKAN AGAR MODEL TERBACA

class CariDonor extends BaseController
{
    // 👈 UBAH NAMA FUNGSINYA JADI index
    public function pendonor() 
    {
        $donorModel = new DonorModel();
        $data['donor'] = $donorModel->findAll();

        return view('Tampilan_PMI/cari_donor');
    }

    public function tambah()
    {
        return view('Tampilan_PMI/detail_donor');
    }

    public function riwayat()
    {
        return view('Tampilan_PMI/riwayat_donor');
    }
}