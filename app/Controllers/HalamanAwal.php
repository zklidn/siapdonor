<?php

namespace App\Controllers;

class awalan extends BaseController
{
    public function index(){
        echo view('awalan');

    }
      public function proses()
    {
        return redirect()->to('login');
    }
}