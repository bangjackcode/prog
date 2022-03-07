<?php

namespace App\Controllers;

use App\Models\MhsModel;
use App\Models\ProdiModel;
use App\Models\MatkulModel;
use App\Models\KrsModel;
use App\Models\DetailModel;

class Home extends BaseController
{
    protected $mhsModel;
    protected $prodiModel;
    protected $matkulModel;
    protected $krsModel;
    protected $detailModel;

    public function __construct() //untuk membuat public di dalam controller
    {
        $this->mhsModel = new MhsModel();
        $this->prodiModel = new ProdiModel();
        $this->matkulModel = new MatkulModel();
        $this->krsModel = new KrsModel();
        $this->detailModel = new DetailModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Siswa',
            'side' => 'siswa',
            'siswa' => $this->mhsModel->getMhs(),
            'prodi' => $this->prodiModel->getProdi(),
        ];
    //dd($data);

        return view('mhs', $data);

       // return view('welcome_message');
    }


    public function prodi($kode_prodi)
    {
        $data = [
            'title' => 'Daftar Siswa',
            'side' => 'siswa',
            'siswa' => $this->mhsModel->getKodeProdi($kode_prodi),
            'prodi' => $this->prodiModel->getProdi(),
        ];
    //dd($data);

        return view('mhs', $data);
    }


    public function angkatan($thn)
    {
        $data = [
            'title' => 'Daftar Siswa',
            'side' => 'siswa',
            'siswa' => $this->mhsModel->getTahunAngkatan($thn),
            'prodi' => $this->prodiModel->getProdi(),
        ];
    //dd($data);

        return view('mhs', $data);
    }
//////////////////////////////////////////////////////////////////////////////////

public function matkul($kode_prodi)
{
    $data = [
        'title' => 'Daftar Siswa',
        'side' => 'siswa',
        'matkul' => $this->matkulModel->getMatkul($kode_prodi),
        'prodi' => $this->prodiModel->getProdi(),
        'kdprodi' => $kode_prodi,

    ];
//dd($data);

    return view('matkul', $data);

   // return view('welcome_message');
}

public function filterMatkul()
{
    $smtr = $this->request->getVar('smtr');
    $kdprodi = $this->request->getVar('kode_prodi');

    $data = [
        'title' => 'Daftar Siswa',
        'side' => 'siswa',
        'matkul' => $this->matkulModel->getFilterMatkul($kdprodi,$smtr),
        'prodi' => $this->prodiModel->getProdi(),
        'kdprodi' => $kdprodi,

    ];
//dd($data);

    return view('matkul', $data);

   // return view('welcome_message');
}





public function detail($nim)
{
    $kode_krs=$this->krsModel->getKrs($nim)['kode_krs'];
   // dd($kode_krs);
    $data = [
        'title' => 'Daftar Siswa',
        'side' => 'siswa',
        'detail' => $this->detailModel->getDetailKrs($kode_krs),
        'prodi' => $this->prodiModel->getProdi(),
        'mhs' => $this->mhsModel->getDetailMhs($nim),

    ];
//dd($data);

    return view('detail_mhs', $data);

   // return view('welcome_message');
}





}
