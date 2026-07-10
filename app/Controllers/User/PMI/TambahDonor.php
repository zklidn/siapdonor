<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;

use App\Models\UserModels;

class TambahDonor extends BaseController
{
    public function tambah()
    {
        return view('Tampilan_PMI/tambah_pendonor');
    }
}