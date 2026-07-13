<?php

namespace App\Controllers\User\RS;

use App\Controllers\BaseController;

class Settings extends BaseController
{
    public function index()
    {
        // Mengambil data dari session untuk ditampilkan di form settings jika diperlukan
        $data = [
            'nama_rs' => session()->get('nama') ?? 'RSUD Anutapura Palu',
            'role'    => session()->get('role') ?? 'Rumah_sakit'
        ];

        // Memanggil tampilan settings.php
        return view('Tampilan_RS/settings', $data);
    }
}