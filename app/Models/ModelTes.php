<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTes extends Model
{
    protected $table = 'tes';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';

    protected $allowedFields = ['id', 'kodekelas', 'kodesiswa', 'aktif', 'sensing', 'visual', 'sequintal', 'nama'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
