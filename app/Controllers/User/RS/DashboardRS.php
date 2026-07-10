<?php

namespace App\Controllers\User\RS;

use App\Controllers\BaseController;

class DashboardRS extends BaseController
{
    public function index()
    {
        return view('Tampilan_RS/dashboard_RS');
    }
}