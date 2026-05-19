<?php

namespace App\Models;

use CodeIgniter\Model;

class DonorModel extends Model
{
    protected $table      = 'donor';
    protected $primaryKey = 'id_donor';

    protected $allowedFields = ['id_user', 'nama', 'golongan_darah', 'rhesus', 'kota', 'status', 'no_hp'];

    protected $useTimestamps = true;
}