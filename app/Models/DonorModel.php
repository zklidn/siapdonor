<?php

namespace App\Models;

use CodeIgniter\Model;

class DonorModel extends Model
{
    protected $table      = 'donor';
    protected $primaryKey = 'id_donor';
    protected $useAutoIncrement = true;
    protected $returnType ='array';
    protected $useSoftDeletes =true;
    protected $protectFields = true;
    protected $allowedFields = ['id_user', 'nama', 'golongan_darah', 'rhesus', 'kota', 'status', 'no_hp'];

    protected $useTimestamps =true;
    protected $dateFormat ='datetime';
    protected $createdField ='created_at';
    protected $updatedField ='updated_at';
    protected $deleteField ='deleted_at';
}