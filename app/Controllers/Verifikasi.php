<?php

namespace App\Controllers;

class Verifikasi extends BaseController
{
    public function index(){
        echo view('verifications');

    }
     public function proses() {
        return redirect()->to('admin');
    }
}