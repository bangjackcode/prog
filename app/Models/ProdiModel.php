<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'program_studi';
    protected $useTimestamps = false;
    protected $allowedFields = ['kode_program_studi','nama_studi_kode', 'singkatan_program_studi', 'kode_fakultas', 'kode_prodi_univ'];


    public function getProdi()
    {
            $this->select('program_studi.*');
            $query = $this->get();
            return $query->getResultArray();
            // return $this->findAll();
    }

}
