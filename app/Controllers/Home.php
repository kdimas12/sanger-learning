<?php

namespace App\Controllers;

use App\Models\KonfirmasiModel;
use App\Models\UserModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->konfirmasiModel = new KonfirmasiModel();
		$this->userModel = new UserModel();
	}

	public function index()
	{
		$session = session();
		$data['konfirmasi'] = "";
		if ($session->id_user != null) {
			$id_user = $session->id_user;
			$id_pendaftaran = $this->userModel->find($id_user)['id_pendaftaran'];
			$data['konfirmasi'] = $this->konfirmasiModel->where('id_pendaftaran', $id_pendaftaran)->findAll();
		}
		return view('welcome_message', $data);
	}
}
