<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController; // Tambahkan ini agar BaseController tetap terbaca

class PermintaanMasuk extends BaseController
{
    public function permintaan()
    {
        return view('Tampilan_PMI/permintaan_masuk');
    }

    public function detail()
    {
        return view('Tampilan_PMI/detail_permintaan');
    }
}