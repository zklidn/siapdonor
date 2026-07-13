<?php

namespace App\Models;

use CodeIgniter\Model;

class PermintaanDarahModel extends Model
{
    protected $table            = 'permintaan_darah';
    protected $primaryKey       = 'id_permintaan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    
    // Sesuaikan dengan migration terbaru (Transaksi Utama)
    protected $allowedFields    = ['id_user', 'id_pasien', 'ruangan', 'diagnosis', 'status'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createField   = 'created_at';
    protected $updateField   = 'updated_at';
    protected $deleteField   = 'deleted_at';

    protected $afterInsert = ['rekamInsert'];
    protected $afterUpdate = ['rekamUpdate'];
    protected $afterDelete = ['rekamDelete'];

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