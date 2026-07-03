<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;

// PERHATIKAN: Nama class WAJIB persis dengan nama file (Stockdarah.php)
// S besar, c, k, d kecil
class Stockdarah extends BaseController 
{
    public function stock()
    {
        return view('Tampilan_PMI/stok_darah');
    }
}