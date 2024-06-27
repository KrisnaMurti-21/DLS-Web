<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCustom extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'idguru';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';

    protected $allowedFields = ['idguru', 'nip', 'nama', 'email', 'password'];

    public function getKelas()
    {
        $builder = $this->db->table('guru');
        $builder->join('kelas', 'kelas.idguru = guru.nip');
        // $builder->select('orders.order_id, orders.order_date, customers.customer_name');
        $query = $builder->get();
        return $query->getResult();
    }
}
