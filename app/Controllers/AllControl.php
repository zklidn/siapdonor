<?php

namespace App\Controllers;

/*------------------halaman awal----------------*/
class HalamanAwal extends BaseController
{
    public function index(){
        echo view('halamanAwal');

    }
}

/*------------------login----------------*/
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


/*------------------register----------------*/
class Register extends BaseController
{
    public function index(){
        echo view('register');

    }
     public function proses()
    {
        return redirect()->to('/dashboard');
    }
    
}

/*------------------verifikasi----------------*/

class Verifikasi extends BaseController
{
    public function index(){
        echo view('verifications');

    }
}


/*------------------dashboard----------------*/


class Dashboard extends BaseController
{
    public function index(){
        echo view('dashboard');

    }
}

class data_donor extends BaseController
{
    public function index(){
        echo view('data_donor');

    }
}
