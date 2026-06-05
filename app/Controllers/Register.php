<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index() 
    {
        return view('register');
    }

    public function proses() 
    {
        $model = new UserModel();

        $model->insert([
            'nama'     => $this->request->getPost('nama_instansi'), // Ubah jadi 'nama'
            'email'    => $this->request->getPost('email_reg'),
            'role'     => $this->request->getPost('role_reg'),
            'password' => password_hash(
                $this->request->getPost('password_reg'),
                PASSWORD_DEFAULT
            )
        ]);

        return redirect()->to('/verifikasi');
    }
}