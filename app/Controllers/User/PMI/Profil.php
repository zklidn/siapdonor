<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;

use App\Models\UserModels;

class Profil extends BaseController
{
    public function profil()
    {
        return view('Tampilan_PMI/settings');
    }
}