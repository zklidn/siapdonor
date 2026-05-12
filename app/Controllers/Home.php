<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function about_us(): string
    {
        return view('about_us');
    }
    public function darah_suci($namanya){
        echo "hai, nama saya " . $namanya;

    }
}
