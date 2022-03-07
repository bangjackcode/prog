<?php

namespace App\Models;

use CodeIgniter\Model;

class KrsModel extends Model
{
    protected $table = 'krs';
    protected $useTimestamps = false;
    protected $allowedFields = ['kode_krs','kode_tahun_akademik', 'nim', 'semester'];


    public function getKrs($nim)
    {
            $this->select('krs.*');
            $this->where(array('nim' => $nim));
            $query = $this->get();
            return $query->getRowArray();
            // return $this->findAll();
    }
}
