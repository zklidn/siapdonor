<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{

    protected $table      = 'pasien';
    protected $primaryKey = 'id_pasien';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeteles = true;
    protected $protectFields = true;
    protected $allowedFields = ['nama', 'umur', 'diagnosa', 'golongan_darah'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createFields = 'create_at';
    protected $updateFields = 'update_at';
    protected $deleteField = 'deleted_at';
}