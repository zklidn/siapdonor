<?php

namespace App\Controllers\User\RS;

use App\Controllers\BaseController;

class RiwayatPermintaan extends BaseController
{
    public function index()
    {
        return view('Tampilan_RS/riwayat_permintaan'); 
    }
}