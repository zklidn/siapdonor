<?php
namespace App\Models;

use CodeIgniter\Model;

class Usermodels extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields = true;
    protected $allowedFields = ['nama', 'email', 'password','alamat','nomor_telepon', 'role', 'file_foto'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deleteField = 'deleted_at';
}