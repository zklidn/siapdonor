<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function register() {
        echo view('register');
    }
    public function registerProses() {
        return redirect()->to('/verifikasi');
    }
}