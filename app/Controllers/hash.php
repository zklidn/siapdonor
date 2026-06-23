<?php

namespace App\Controllers;

class Hash extends BaseController
{
    public function index()
    {
        echo password_hash("ukidamian", PASSWORD_DEFAULT);
    }
}