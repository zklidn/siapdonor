<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index() {
        echo view('register');
    }
    public function proses() {
        return redirect()->to('/verifikasi');
    }
}



