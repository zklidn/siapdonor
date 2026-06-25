<?php

namespace App\Models;

use CodeIgniter\Model;

class PermintaanDarahModel extends Model
{
    protected $table      = 'permintaan_darah';
    protected $primaryKey = 'id_permintaan';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftFields = true;
    protected $proctectFields = true;
    protected $allowedFields = ['tgl_permintaan', 'status', 'jumlah_kantong', 'kebutuhan'. 'golongan_darah'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedfield = 'updated_at';
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