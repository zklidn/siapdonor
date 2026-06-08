<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPermintaanModel extends Model
{
    protected $table      = 'detail_permintaan';
    protected $primaryKey = 'id_detail';
    protected $useAutoIncrement = true;
    protected $returnType ='array';
    protected $useSoftDeletes =true;
    protected $protectFields = true;
    protected $allowedFields = ['id_permintaan', 'jenis_darah','jumlah'];

    protected $useTimestamps =true;
    protected $dateFormat ='datetime';
    protected $createdField ='created_at';
    protected $updatedField ='updated_at';
    protected $deleteField ='deleted_at';

}