<?php

namespace App\Controllers;

use App\Models\usermodels;

class Login extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function processLogin()
    {
        $model = new usermodels();

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $role     = $this->request->getPost('role');

        // Cari user berdasarkan email
        $user = $model->where('email', $email)->first();

        // Jika email tidak ditemukan
        if (!$user) {
            return redirect()->back()
                ->with('error', 'Email tidak terdaftar');
        }

        // Jika password salah
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()
                ->with('error', 'Password salah');
        }

        // Jika role tidak sesuai
        if ($user['role'] != $role) {
            return redirect()->back()
                ->with('error', 'Role tidak sesuai');
        }

        // Simpan data user ke session
        session()->set([
            'user_id'    => $user['id'],
            'nama'       => $user['nama'],
            'email'      => $user['email'],
            'role'       => $user['role'],
            'isLoggedIn' => true
        ]);

        // Redirect sesuai role
        switch ($user['role']) {
            case 'admin':
                return redirect()->to('/admin');

            case 'pmi':
                return redirect()->to('/pmi');

            case 'rumah_sakit':
                return redirect()->to('/rs');

            default:
                return redirect()->back()
                    ->with('error', 'Role tidak dikenali');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}