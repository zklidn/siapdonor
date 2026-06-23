<?php

namespace App\Controllers;

class Hash extends BaseController
{
    public function index()
    {
        echo password_hash("1234567", PASSWORD_DEFAULT);
    }
}