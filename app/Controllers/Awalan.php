<?php

namespace App\Controllers;

class Awalan extends BaseController
{
    public function index() 
    {
        return view('awalan');
    }
    
    public function tentang() 
    {
        return view('tentang_kami');
    }
}