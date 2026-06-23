<?php

namespace App\Controllers;

use App\Models\usermodels;

class Login extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function processLogin()
{
    $model = new usermodels();

    $email    = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    
    // 1. Cari user berdasarkan email di database
    $user = $model->where('email', $email)->first();

    // 2. Jika email tidak ditemukan
    if (!$user) {
        return redirect()->back()->with('error', 'Email tidak terdaftar');
    }

    // 3. Jika password salah
    if (!password_verify($password, $user['password'])) {
        return redirect()->back()->with('error', 'Password salah');
    }

    // PAKSA ROLE MENJADI HURUF KECIL AGAR COCOK DENGAN FILTER
    $role_db = strtolower($user['role']); 

    // 4. Simpan data user ke session
    session()->set([
        'id_user'    => $user['id'], // <--- DIUBAH JADI id_user
        'nama'       => $user['nama'],
        'email'      => $user['email'],
        'role'       => $role_db,    // <--- Role yang sudah di-huruf-kecil-kan
        'isLoggedIn' => true
    ]);

    // 5. Redirect otomatis sesuai role masing-masing
    switch ($role_db) {
        case 'admin':
            return redirect()->to('/admin');

        case 'pmi':
            return redirect()->to('/pmi');

        case 'rumah_sakit':
            return redirect()->to('/rs');

        default:
            return redirect()->back()->with('error', 'Role akun Anda tidak dikenali sistem');
    }
}

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}