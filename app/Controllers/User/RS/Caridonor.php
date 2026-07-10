<?php

namespace App\Controllers\User\RS;

use App\Controllers\BaseController;

class CariDonor extends BaseController
{
    public function index()
    {
        return view('Tampilan_RS/cari_donor');
    }
}