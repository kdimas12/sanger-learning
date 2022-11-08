<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        helper('form');
        $dataUser = $this->userModel->find(session()->get('id_user'));
        $data = [
            'dataUser'  => $dataUser,
        ];
        return view('profile', $data);
    }

    public function save()
    {
        $tanggalLahir = $this->request->getVar('tanggalLahir');
        $dataUser = [
            'nama_depan'        => $this->request->getVar('nama_depan'),
            'nama_belakang'     => $this->request->getVar('nama_belakang'),
            'jenis_kelamin'     => $this->request->getVar('jenis_kelamin'),
            'tanggal_lahir'     => date('Y-m-d', strtotime($tanggalLahir)),
            'alamat_lengkap'    => $this->request->getVar('alamatLengkap'),
            'kota'              => $this->request->getVar('kota'),
            'no_handphone'      => $this->request->getVar('no_handphone'),
        ];
        $this->userModel->update($this->userModel->find(session()->get('id_user')), $dataUser);
        return redirect()->to(base_url('profile'));
    }
}
