<?php
namespace App\Models;

use CodeIgniter\Model;

class permintaandarah extends Model
{
    protected $table = 'permintaandarah';
    protected $primaryKey = 'id_permintaandarah';
    
    protected $allowedFields = ['id_user','tgl_permintaan','status','jumlah_kantong'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}