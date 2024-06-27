<?php

namespace App\Models;

use CodeIgniter\Model;

class OnlineVisitorModel extends Model
{
    protected $table = 'online_visitors';
    protected $allowedFields = ['ip_address', 'timestamp'];

    protected $useTimestamps = false; // Tidak perlu lagi menggunakan fitur timestamps CI4
}
