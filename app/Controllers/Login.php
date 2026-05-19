<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(){
        echo view('login');

    }
    public function proses()
    {
        return redirect()->to('/dashboard');
    }
}