<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{

    protected $table      = 'pasien';
    protected $primaryKey = 'id_pasien';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeteles = true;
    protected $protectFields = true;
    protected $allowedFields = ['nama', 'umur', 'diagnosa', 'golongan_darah'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createFields = 'create_at';
    protected $updateFields = 'update_at';
    protected $deleteField = 'deleted_at';

    // 1. Mendaftarkan trigger otomatis (Callback)
    protected $afterInsert = ['rekamInsert'];
    protected $afterUpdate = ['rekamUpdate'];
    protected $afterDelete = ['rekamDelete'];

    // 2. Fungsi yang dijalankan SETELAH proses Insert/Update/Delete
    protected function rekamInsert(array $data)
    {
        $this->simpanLogOtomatis('Menambah data baru di tabel ' . $this->table);
        return $data;
    }

    protected function rekamUpdate(array $data)
    {
        $this->simpanLogOtomatis('Mengubah data di tabel ' . $this->table);
        return $data;
    }

    protected function rekamDelete(array $data)
    {
        $this->simpanLogOtomatis('Menghapus data di tabel ' . $this->table);
        return $data;
    }

    // 3. Eksekusi penyimpanan ke tabel log_aktivitas
    private function simpanLogOtomatis($aksi)
    {
        // Memanggil LogAktivitasModel
        $logModel = new \App\Models\LogAktivitasModel();
        
        $logModel->insert([
            // Ambil id_user dari session login. Jika session tidak terbaca, gunakan 0 (sistem)
            'id_user'    => session()->get('id_user') ?? 0, 
            'aktivitas'  => $aksi,
            // Mengambil IP Address perangkat yang mengakses
            'keterangan' => \Config\Services::request()->getIPAddress() 
        ]);
    }
}