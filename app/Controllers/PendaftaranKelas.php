<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CoursesModel;
use App\Models\PendaftaranKelasModel;
use App\Models\UserModel;

class PendaftaranKelas extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->coursesModel = new CoursesModel();
        $this->pendaftaranKelasModel = new PendaftaranKelasModel();
    }
    public function index($idKelas = null)
    {
        $dataCourse = $this->coursesModel->findAll();

        $data = array(
            'title'             => 'Pendaftaran Kelas',
            'dataCourses'       => $dataCourse,
            'selectedCourses'   => $idKelas,
        );
        return view('pendaftaran_kelas', $data);
    }

    public function daftar()
    {
        $kodePendaftaran = $this->pendaftaranKelasModel->getKodePendaftaran();
        $dataPendaftaran = [
            'id_pendaftaran'        => $kodePendaftaran,
            'id_kelas'              => $this->request->getVar('kelas'),
            'tanggal_pendaftaran'   => date('Y-m-d H:i:s'),
        ];
        $this->pendaftaranKelasModel->insert($dataPendaftaran);

        $dataUser = [
            'id_pendaftaran'    => $kodePendaftaran,
        ];
        $this->userModel->update($this->userModel->find(session()->get('id_user')), $dataUser);
        return redirect()->to(base_url());
    }
}
