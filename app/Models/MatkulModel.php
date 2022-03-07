<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table = 'matakuliah';
    protected $useTimestamps = false;
    protected $allowedFields = ['id_matakuliah','kode_program_studi', 'kode_matakuliah', 'nama_matakuliah'];


    public function getMatkul($kode_prodi)
    {
            $this->select('matakuliah.*');
            $this->where(array('kode_program_studi' => $kode_prodi));
            $query = $this->get();
            return $query->getResultArray();
    }


    // public function getKodeProdi($kode_prodi)
    // {
    //     $this->select('mahasiswa.*');
    //     $this->where(array('program_studi_kode' => $kode_prodi));
    //     $query = $this->get();
    //     return $query->getResultArray();
    // }



    public function getFilterMatkul($kdprodi, $smtr)
    {
        $this->select('matakuliah.*');
        $this->where(array('kode_program_studi' => $kdprodi));
        $this->like('kode_matakuliah' , $smtr, 'both');
        $query = $this->get();
        return $query->getResultArray();
    }


}
