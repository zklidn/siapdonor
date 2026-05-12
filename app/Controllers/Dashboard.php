<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function matahari($namanya,$hewan){
        echo "hai, kamu seperti " . $namanya;
        echo "kamu mirip " . $hewan;

    }
}