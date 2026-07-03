<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\Usermodels;
use App\Models\DonorModel;
use App\Models\PermintaanModel;
use App\Models\LogAktivitasModel;
// (Tambahkan model lain di sini jika ada, misalnya DetailPermintaanModel)

class RiwayatAdmin extends BaseController
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
}
