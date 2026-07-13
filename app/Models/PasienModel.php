<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table            = 'pasien';
    protected $primaryKey       = 'id_pasien';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    
    // Sesuaikan dengan migration terbaru
    protected $allowedFields    = ['no_rm', 'nama_pasien', 'golongan_darah', 'rhesus'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createField   = 'created_at';
    protected $updateField   = 'updated_at';
    protected $deleteField   = 'deleted_at';

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
        $logModel = new \App\Models\LogAktivitasModel();
        
        $logModel->insert([
            'id_user'    => session()->get('id_user') ?? 0, 
            'aktivitas'  => $aksi,
            'keterangan' => \Config\Services::request()->getIPAddress() 
        ]);
    }
}