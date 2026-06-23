<?php

namespace App\Controllers;

class Hash extends BaseController
{
    public function index()
    {
        echo password_hash("12345", PASSWORD_DEFAULT);
    }
}