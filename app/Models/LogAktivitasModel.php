<?php

namespace App\Models;

use CodeIgniter\Model;

class LogAktivitasModel extends Model
{
    protected $table            = 'log_aktivitas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    
    // Pastikan kolom ini sesuai
    protected $allowedFields    = ['id_user', 'aktivitas', 'keterangan'];

    protected $useTimestamps    = true;
    protected $dateFormat       = 'datetime';
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deleteField      = 'deleted_at';

    // ==============================================================
    // ⚠️ PENTING: Jangan ada kode $afterInsert / rekamInsert di sini
    // ==============================================================
}