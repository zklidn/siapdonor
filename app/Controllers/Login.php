<?php


namespace App\Controllers;


use App\Models\UserModel;


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
        $model = new UserModel();

        $user = $model->where('email', $this->request->getPost('email'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {

            // Set session, pastikan ada kolom 'role' di tabel database-mu (isinya: admin, pmi, atau rs)
            session()->set([
                'user_id'    => $user['id'],
                'nama'       => $user['nama'],
                'role'       => $user['role'], 
                'isLoggedIn' => true
            ]);

            // Arahkan ke rute URL berdasarkan role
            switch ($user['role']) {
                case 'admin':
                    return redirect()->to('/admin'); // Diubah dari /dashboard/admin
                case 'pmi':
                    return redirect()->to('/pmi');   // Diubah dari /dashboard/pmi
                case 'rs':
                    return redirect()->to('/rs');    // Diubah dari /dashboard/rs
                default:
                    return redirect()->back()->with('error', 'Role tidak dikenali');
            }
        }

        return redirect()->back()->with('error', 'Email atau password salah');
    }
    public function processRegister()
    {
        $model = new UserModel();

        // Catatan: Jika saat register user bisa memilih role, 
        // pastikan kamu menangkap input 'role' juga di sini.
        // Jika tidak, set default role (misalnya 'rs' atau 'pmi').
        
        $model->insert([
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'role'     => $this->request->getPost('role'), // Tambahan jika ada input role
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            )
        ]);

        return redirect()->to('/login')->with('success', 'Register berhasil, silakan login');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}