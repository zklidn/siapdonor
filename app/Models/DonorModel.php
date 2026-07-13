<?php

namespace App\Models;

use CodeIgniter\Model;

class DonorModel extends Model
{
    protected $table            = 'donor';
    protected $primaryKey       = 'id_donor';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    
    // UBAH DI SINI: Menambahkan 'alamat' dan 'foto' ke dalam allowedFields
    protected $allowedFields    = [
        'id_user', 'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 
        'jenis_kelamin', 'golongan_darah', 'rhesus', 'kecamatan', 
        'alamat', 'status', 'no_hp', 'foto'
    ];

    protected $useTimestamps    = true;
    protected $dateFormat       = 'datetime';
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at'; // Diperbaiki dari $deleteField

    // =======================================================
    // TAMBAHAN FITUR LOG AKTIVITAS OTOMATIS (AUDIT TRAIL)
    // =======================================================

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
            // UBAH DI SINI: Ganti 0 menjadi null
            'id_user'    => session()->get('id_user') ?? null, 
            'aktivitas'  => $aksi,
            // Mengambil IP Address perangkat yang mengakses
            'keterangan' => \Config\Services::request()->getIPAddress() 
        ]);
    }
}