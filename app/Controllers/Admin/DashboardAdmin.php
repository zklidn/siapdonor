<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

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

}