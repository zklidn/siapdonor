<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'id_pasien';

    protected $allowedFields = ['id_permintaan', 'nama', 'umur', 'diagnosa', 'golongan_darah'];

    protected $useTimestamps = true;
}