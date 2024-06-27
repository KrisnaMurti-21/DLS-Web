<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSoal extends Model
{
    protected $table = 'soal';
    protected $primaryKey = 'idsoal';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';

    protected $allowedFields = ['idsoal', 'quest', 'answer1', 'answer2'];

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
