<?php

namespace App\Models;

use CodeIgniter\Model;

class Sekolah extends Model
{
    protected $table      = 'sekolah';
    protected $primaryKey = 'id_sekolah';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama', 'alamat', 'email', 'telepon', 'kota', 'provinsi', 'pass', 'is_active'];

    /* protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at'; */

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}