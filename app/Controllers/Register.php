<?php

namespace App\Controllers;

// Jangan lupa panggil UserModel agar bisa menyimpan ke database
use App\Models\UserModel;

class Register extends BaseController
{
    public function index() 
    {
        // Di CodeIgniter 4, disarankan menggunakan 'return' daripada 'echo'
        return view('register');
    }

    public function proses() 
    {
        $model = new UserModel();

        // 1. Simpan data inputan dari form ke database
        $model->insert([
            'nama'     => $this->request->getPost('nama'),
            'email'    => $this->request->getPost('email'),
            'role'     => $this->request->getPost('role'), // Pastikan form registermu punya input/select name="role"
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            )
        ]);

        // 2. Redirect ke halaman verifikasi dengan pesan sukses
        return redirect()->to('/verifikasi')->with('success', 'Pendaftaran berhasil, silakan lakukan verifikasi.');
    }
}

