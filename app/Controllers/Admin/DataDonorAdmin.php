<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\Usermodels;
use App\Models\DonorModel;
use App\Models\PermintaanModel;
use App\Models\LogAktivitasModel;
// (Tambahkan model lain di sini jika ada, misalnya DetailPermintaanModel)

class DataDonorAdmin extends BaseController
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
    
}
