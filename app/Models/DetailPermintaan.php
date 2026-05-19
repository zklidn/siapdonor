<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPermintaanModel extends Model
{
    protected $table      = 'detail_permintaan';
    protected $primaryKey = 'id_detail';

    protected $allowedFields = ['id_permintaan', 'jenis_darah','jumlah'];

    protected $useTimestamps = true;
}