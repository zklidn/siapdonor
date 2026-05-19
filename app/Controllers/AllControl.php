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
    public function regis(){
        return redirect()->to('/register');
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
       public function fikasi()
    {
        return redirect()->to('/verifications');
    }
}

/*------------------verifikasi----------------*/

class Verifikasi extends BaseController
{
    public function index(){
        echo view('verifikasi');

    }
   
}


/*------------------dashboard----------------*/


class Dashboard extends BaseController
{
    public function index(){
        echo view('dashboard');

    }
}