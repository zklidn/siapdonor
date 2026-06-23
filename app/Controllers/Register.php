<?php

namespace App\Controllers;

use App\Models\Usermodels; // Gunakan huruf kapital untuk standar penamaan Class

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

        $model = new Usermodels();

        $model->insert([
            'email'    => $this->request->getPost('email_reg'),
            'role'     => $this->request->getPost('role_reg'),
            'password' => password_hash(
                $this->request->getPost('password_reg'),
                PASSWORD_DEFAULT
            )
        ]);

        $insertId = $model->getInsertID();

        // UBAH 'user_id' MENJADI 'id_user' AGAR SERAGAM DENGAN BIODATA & MODEL
        session()->set([
            'id_user' => $insertId
        ]);

        return redirect()->to('/biodata');
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}