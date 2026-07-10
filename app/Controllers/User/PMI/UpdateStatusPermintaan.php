<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;

// PERHATIKAN: Nama class WAJIB persis dengan nama file (Stockdarah.php)
// S besar, c, k, d kecil
class UpdateStatusPermintaan extends BaseController 
{
    public function Update()
    {
        return view('Tampilan_PMI/update_status_permintaan');
    }
}