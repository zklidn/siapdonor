<?php

namespace App\Models;

use CodeIgniter\Model;

class NotifikasiModel extends Model
{
    protected $table            = 'notifikasi';
    protected $primaryKey       = 'id_notifikasi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true; 
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user', 'judul', 'pesan', 'tanggal', 'status'];

    // Pengaturan Timestamps
    protected $useTimestamps    = true;
    protected $dateFormat       = 'datetime';
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';

    // =======================================================
    // FITUR LOG AKTIVITAS (Disesuaikan untuk Notifikasi)
    // =======================================================

    protected $afterInsert = ['rekamInsert'];
    protected $afterUpdate = ['rekamUpdate'];
    protected $afterDelete = ['rekamDelete'];

    protected function rekamInsert(array $data)
    {
        // Pesan disesuaikan dengan konteks notifikasi
        $this->simpanLogOtomatis('Sistem mengirim notifikasi baru ke pengguna');
        return $data;
    }

    protected function rekamUpdate(array $data)
    {
        // Biasanya update di notifikasi terjadi saat status berubah jadi 'Dibaca'
        $this->simpanLogOtomatis('Status notifikasi diperbarui (misal: telah dibaca)');
        return $data;
    }

    protected function rekamDelete(array $data)
    {
        $this->simpanLogOtomatis('Menghapus riwayat notifikasi');
        return $data;
    }

    private function simpanLogOtomatis($aksi)
    {
        $logModel = new \App\Models\LogAktivitasModel();
        
        $logModel->insert([
            // Menggunakan null jika session kosong (mencegah error foreign key)
            'id_user'    => session()->get('id_user') ?? null, 
            'aktivitas'  => $aksi,
            'keterangan' => \Config\Services::request()->getIPAddress() 
        ]);
    }

    // =======================================================
    // FUNGSI KHUSUS NOTIFIKASI
    // =======================================================

    /**
     * Fungsi untuk fitur tombol "Tandai semua sebagai dibaca" di UI
     */
    public function tandaiSemuaDibaca($id_user)
    {
        return $this->where('id_user', $id_user)
                    ->where('status', 'Belum Dibaca')
                    ->set(['status' => 'Dibaca'])
                    ->update();
    }
}