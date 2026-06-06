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
    protected $allowedFields = ['tgl_permintaan', 'status', 'jumlah_kantong'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedfield = 'update_at';
}
