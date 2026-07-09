<?php

namespace App\Controllers\User\RS;

use App\Controllers\BaseController;

class DetailPermintaan extends BaseController
{
    public function index($id)
    {
        $data['id_permintaan'] = $id;
        
        return view('Tampilan_RS/detail_permintaan', $data);
    }
}