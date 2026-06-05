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
            return redirect()->back()
                ->with('error', 'Email tidak terdaftar');
        }

        // 3. Jika password salah
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()
                ->with('error', 'Password salah');
        }

        // KODE PENGECEKAN ROLE YANG ERROR SEBELUMNYA SUDAH DIHAPUS DI SINI

        // 4. Simpan data user (termasuk role dari database) ke session
        session()->set([
            'user_id'    => $user['id'],
            'nama'       => $user['nama'],
            'email'      => $user['email'],
            'role'       => $user['role'], // <--- Role diambil langsung dari database
            'isLoggedIn' => true
        ]);

        // 5. Redirect otomatis sesuai role masing-masing
        switch ($user['role']) {
            case 'admin':
                return redirect()->to('/admin');

            case 'pmi':
                return redirect()->to('/pmi');

            case 'rumah_sakit':
                return redirect()->to('/rs');

            default:
                // Jika role di database kosong atau salah ketik
                return redirect()->back()
                    ->with('error', 'Role akun Anda tidak dikenali sistem');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}