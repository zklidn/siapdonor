<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class NotifikasiAdmin extends BaseController
{
    public function notifikasi_admin()
    {
        return view('Tampilan_Admin/notifikasi');
    }

    
}
