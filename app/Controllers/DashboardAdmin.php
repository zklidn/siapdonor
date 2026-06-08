<?php

namespace App\Controllers;

use App\Models\usermodels;
use App\Models\DonorModel;
use App\Models\PermintaanDarahModel;
use App\Models\DetailPermintaanModel;

class DashboardAdmin extends BaseController
{
    protected $userModel;
    protected $donorModel;
    protected $permintaanModel;
    protected $detailPermintaanModel;

    public function __construct()
    {
        $this->userModel = new usermodels();
        $this->donorModel = new DonorModel();
        $this->permintaanModel = new PermintaanDarahModel();
        $this->detailPermintaanModel = new DetailPermintaanModel();
    }


    public function admin()
    {
        $data['totalUser'] = $this->userModel->countAllResults();

        $data['totalDonor'] = $this->donorModel->countAllResults();

        $data['totalPermintaan'] = $this->permintaanModel->countAllResults();

        $data['totalAktivitas'] = $this->detailPermintaanModel->countAllResults();

        $data['aktivitasTerbaru'] = $this->permintaanModel
            ->select('permintaan_darah.*, users.nama')
            ->join('users', 'users.id = permintaan_darah.id_user')
            ->orderBy('permintaan_darah.created_at', 'DESC')
            ->findAll(5);

        return view('Tampilan_Admin/dashboard', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }


    // Fungsi untuk halaman data donor
    public function data_donor()
    {

        $donorModel = new DonorModel();

        $data['donor'] = $donorModel->findAll();

        // Memanggil file: app/Views/Tampilan_Admin/data_donor.php
        return view('Tampilan_Admin/data_donor', $data);
    }


   public function kelola_user()
    {
        // 1. Menangkap input dari form
        $keyword = $this->request->getVar('keyword');
        $role    = $this->request->getVar('role'); // Menangkap dari nama dropdown
        
        // 2. Filter Pencarian Text (Nama atau Email)
        if ($keyword) {
            $this->userModel->groupStart()
                            ->like('nama', $keyword)
                            ->orLike('email', $keyword)
                            ->groupEnd();
        }

        // 3. Filter berdasarkan Dropdown Role
        if ($role && $role !== '') {
            // PENTING: Ganti kata 'role' di bawah dengan nama kolom yang benar di tabel database Anda
            // (misalnya jika di database namanya 'peran', maka ubah menjadi 'peran')
            $this->userModel->where('role', $role); 
        }

        // 4. Eksekusi query dengan paginasi
        $users = $this->userModel->paginate(5, 'users');

        // 5. Kirim data ke tampilan
        $data = [
            'users'     => $users,
            'pager'     => $this->userModel->pager,
            // Mengambil total perhitungan data setelah filter diterapkan
            'totalData' => $this->userModel->pager->getTotal('users') 
        ];

        return view('Tampilan_Admin/kelola_user', $data);
    }
    

   public function riwayat()
    {
        // Memanggil LogAktivitasModel
        $logModel = model('App\Models\LogAktivitasModel');

        // Menangkap input pencarian
        $keyword = $this->request->getVar('keyword');

        // Query join dengan tabel users, dan urutkan berdasarkan created_at (waktu terbaru)
        $logModel->select('log_aktivitas.*, users.nama as nama_pengguna')
                 ->join('users', 'users.id = log_aktivitas.id_user', 'left')
                 ->orderBy('log_aktivitas.created_at', 'DESC');

        // Fitur pencarian
        if ($keyword) {
            $logModel->groupStart()
                     ->like('log_aktivitas.aktivitas', $keyword)
                     ->orLike('users.nama', $keyword)
                     ->groupEnd();
        }

        // Eksekusi data
        $data = [
            'logs'      => $logModel->paginate(5, 'logs'),
            'pager'     => $logModel->pager,
            'totalData' => $logModel->pager->getTotal('logs')
        ];

        return view('Tampilan_Admin/riwayat_aktifitas', $data);
    }
}