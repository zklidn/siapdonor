<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ProfilAdmin extends BaseController
{
    public function profil_admin()
    {
        return view('Tampilan_Admin/settings');
    }
}