<?php

namespace App\Models;

use CodeIgniter\Model;

class PermintaanDarahModel extends Model
{
    protected $table      = 'permintaan_darah';
    protected $primaryKey = 'id_permintaan';

    protected $allowedFields = ['id_user', 'tgl_permintaan', 'status', 'jumlah_kantong'];

    protected $useTimestamps = true;
}