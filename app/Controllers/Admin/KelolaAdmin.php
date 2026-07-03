<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\Usermodels;
use App\Models\DonorModel;
use App\Models\PermintaanModel;
use App\Models\LogAktivitasModel;
// (Tambahkan model lain di sini jika ada, misalnya DetailPermintaanModel)

class KelolaAdmin extends BaseController
{
    protected $userModel;
    protected $donorModel;
    protected $permintaanModel;
    protected $logModel;

    public function __construct()
    {
        // Inisialisasi Model agar bisa dipanggil di semua fungsi menggunakan $this->...
        $this->userModel       = new Usermodels();
        $this->donorModel      = new DonorModel();
        $this->logModel        = new LogAktivitasModel();
        
        // Panggil model permintaan darah jika sudah dibuat
        // $this->permintaanModel = new PermintaanModel(); 
    }

    // =========================================================
    // 4. KELOLA USER (TAMPIL, HAPUS, EDIT, UPDATE)
    // =========================================================
    
    // --- Menampilkan Daftar User ---
    public function kelola_user()
    {
        $keyword = $this->request->getVar('keyword');
        $role    = $this->request->getVar('role'); 
        
        if ($keyword) {
            $this->userModel->groupStart()
                            ->like('nama', $keyword)
                            ->orLike('email', $keyword)
                            ->groupEnd();
        }

        if ($role && $role !== '') {
            $this->userModel->where('role', $role); 
        }

        $data = [
            'users'     => $this->userModel->paginate(5, 'users'),
            'pager'     => $this->userModel->pager,
            'totalData' => $this->userModel->pager->getTotal('users') 
        ];

        return view('Tampilan_Admin/kelola_user', $data);
    }

    // --- Menghapus User ---
    public function hapus_user($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/admin/kelola_user');
    }

    // --- Menampilkan Form Edit User ---
    public function edit_user($id)
    {
        $data['user'] = $this->userModel->find($id);

        if (empty($data['user'])) {
            return redirect()->to('/admin/kelola_user');
        }

        return view('Tampilan_Admin/edit_user', $data);
    }

    // --- Memproses Perubahan Data User ---
    public function update_user($id)
    {
        // Mengambil data dari form edit_user.php
        $data_update = [
            'nama'          => $this->request->getPost('nama'),
            'email'         => $this->request->getPost('email'),
            'role'          => $this->request->getPost('role'),
            // Sesuaikan nama instansi jika ada di database (opsional)
            // 'nama_instansi' => $this->request->getPost('nama_instansi'),
            'status'        => $this->request->getPost('status')
        ];

        // Update ke database
        $this->userModel->update($id, $data_update);
        
        // Kembali ke halaman kelola user
        return redirect()->to('/admin/kelola_user');
    }

    public function profil_admin()
    {
        return view('Tampilan_Admin/settings');
    }

    public function notifikasi_admin()
    {
        return view('Tampilan_Admin/notifikasi');
    }
    
}
