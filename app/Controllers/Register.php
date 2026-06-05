<?php

namespace App\Controllers;

use App\Models\usermodels;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function proses()
    {
        // Cek apakah password dan konfirmasi password sama
        if (
            $this->request->getPost('password_reg') !=
            $this->request->getPost('konfirmasi_password')
        ) {
            return redirect()->back()->with(
                'error',
                'Konfirmasi password tidak cocok'
            );
        }

        $model = new usermodels();

        $model->insert([
            'nama'     => $this->request->getPost('nama_instansi'),
            'email'    => $this->request->getPost('email_reg'),
            'role'     => $this->request->getPost('role_reg'),
            'password' => password_hash(
                $this->request->getPost('password_reg'),
                PASSWORD_DEFAULT
            )
        ]);

        return redirect()->to('/login');
    }
}