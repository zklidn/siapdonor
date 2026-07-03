<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;

class Laporan extends BaseController
{
    // Nama fungsi tidak boleh sekadar 'laporan'
    public function laporan() 
    {
        return view('Tampilan_PMI/laporan');
    }
}