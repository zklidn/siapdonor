<?php

namespace App\Controllers;

class Login extends BaseController
{
   public function login() {
        echo view('login');
    }
    public function loginProses() {
        return redirect()->to('/dashboard');
    }
}