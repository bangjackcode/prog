<?php

namespace App\Models;

use CodeIgniter\Model;

class MhsModel extends Model
{
    protected $table = 'mahasiswa';
    protected $useTimestamps = false;
    protected $allowedFields = ['nim','program_studi_kode', 'nama_mahasiswa'];


    public function getMhs($nim = false)
    {
        if ($nim == false) {
            $this->select('mahasiswa.*');
            $query = $this->get();
            return $query->getResultArray();
            // return $this->findAll();
        }

        return $this->where(['nim' => $nim])->first();
    }


    public function getKodeProdi($kode_prodi)
    {
        $this->select('mahasiswa.*');
        $this->where(array('program_studi_kode' => $kode_prodi));
        $query = $this->get();
        return $query->getResultArray();
    }



    public function getTahunAngkatan($thn)
    {
        $this->select('mahasiswa.*');
        $this->like('nim' , $thn, 'after');
        $query = $this->get();
        return $query->getResultArray();
    }


    public function getDetailMhs($nim)
    {
            $this->select('mahasiswa.*');
            $this->where(array('nim' => $nim));
            $query = $this->get();
            return $query->getRowArray();
    }

}