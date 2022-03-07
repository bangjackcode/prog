<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailModel extends Model
{
    protected $table = 'krs_detail';
    protected $useTimestamps = false;
    protected $allowedFields = ['kode_krs_detail', 'kode_krs','status', 'id_matakuliah'];


    public function getDetailKrs($kode_krs)
    {
            $this->select('krs_detail.*, matakuliah.*');
            $this->join('matakuliah', 'matakuliah.id_matakuliah = krs_detail.id_matakuliah');
            $this->where(array('kode_krs' => $kode_krs));
            $query = $this->get();
            return $query->getResultArray();
            // return $this->findAll();
    }
}
