<?php

namespace App\Controllers;

use App\Models\Usermodels;
use App\Models\DonorModel;
use App\Models\PermintaanModel;
use App\Models\LogAktivitasModel;
// (Tambahkan model lain di sini jika ada, misalnya DetailPermintaanModel)

class DashboardAdmin extends BaseController
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
    // 1. HALAMAN DASHBOARD UTAMA
    // =========================================================
    public function admin()
    {
        $data['totalUser']       = $this->userModel->countAllResults();
        $data['totalDonor']      = $this->donorModel->countAllResults();
        
        // Nonaktifkan sementara jika model Permintaan belum siap
        // $data['totalPermintaan'] = $this->permintaanModel->countAllResults();
        $data['totalPermintaan'] = 0; 

        // Mengambil Total dan 5 Aktivitas Terbaru dari tabel log_aktivitas
        $data['totalAktivitas']   = $this->logModel->countAllResults();
        $data['aktivitasTerbaru'] = $this->logModel->select('log_aktivitas.*, users.nama as nama_pengguna')
            ->join('users', 'users.id = log_aktivitas.id_user', 'left')
            ->orderBy('log_aktivitas.created_at', 'DESC')
            ->findAll(5);

        return view('Tampilan_Admin/dashboard', $data);
    }

    // =========================================================
    // 2. HALAMAN DATA DONOR
    // =========================================================
    public function data_donor()
     {
        $donorModel = new DonorModel();
        $data['donor'] = $donorModel->findAll();

         return view('Tampilan_Admin/data_donor', $data);
    }

    // --- AKSI HAPUS DONOR ---
    public function hapus_donor($id)
    {
        $this->donorModel->delete($id);
        return redirect()->to('/admin/data_donor');
    }

    // --- AKSI FORM EDIT DONOR ---
    public function edit_donor($id)
    {
        $data['donor'] = $this->donorModel->find($id);

        if (empty($data['donor'])) {
            return redirect()->to('/admin/data_donor');
        }

        return view('Tampilan_Admin/edit_donor', $data);
    }

    // --- AKSI PROSES UPDATE DATA DONOR ---
    public function update_donor($id)
    {
        $data_update = [
            'nama'           => $this->request->getPost('nama'),
            'golongan_darah' => $this->request->getPost('golongan_darah'),
            'rhesus'         => $this->request->getPost('rhesus'),
            'kota'           => $this->request->getPost('kecamatan'), // sesuaikan nama kolom kota/kecamatan Anda
            'status'         => $this->request->getPost('status'),
            'no_hp'          => $this->request->getPost('no_hp')
        ];

        $this->donorModel->update($id, $data_update);
        return redirect()->to('/admin/data_donor');
    }


    // =========================================================
    // 3. HALAMAN RIWAYAT AKTIVITAS
    // =========================================================
    public function riwayat()
    {
        $keyword = $this->request->getVar('keyword');

        $this->logModel->select('log_aktivitas.*, users.nama as nama_pengguna')
                 ->join('users', 'users.id = log_aktivitas.id_user', 'left')
                 ->orderBy('log_aktivitas.created_at', 'DESC');

        if ($keyword) {
            $this->logModel->groupStart()
                     ->like('log_aktivitas.aktivitas', $keyword)
                     ->orLike('users.nama', $keyword)
                     ->groupEnd();
        }

        $data = [
            'logs'      => $this->logModel->paginate(5, 'logs'),
            'pager'     => $this->logModel->pager,
            'totalData' => $this->logModel->pager->getTotal('logs')
        ];

        return view('Tampilan_Admin/riwayat_aktifitas', $data);
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