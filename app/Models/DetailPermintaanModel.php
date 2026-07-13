<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPermintaanModel extends Model
{
    protected $table            = 'detail_permintaan';
    protected $primaryKey       = 'id_detail';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    
    // Sesuaikan dengan migration terbaru (Item Transaksi)
    protected $allowedFields    = ['id_permintaan', 'jenis_darah', 'jumlah_kantong', 'prioritas'];

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
        $this->simpanLogOtomatis('Menambah rincian kantong darah di tabel ' . $this->table);
        return $data;
    }

    protected function rekamUpdate(array $data)
    {
        $this->simpanLogOtomatis('Mengubah rincian kantong darah di tabel ' . $this->table);
        return $data;
    }

    protected function rekamDelete(array $data)
    {
        $this->simpanLogOtomatis('Menghapus rincian kantong darah di tabel ' . $this->table);
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