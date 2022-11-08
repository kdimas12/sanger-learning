<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{
		helper(['form']);
		return view('login');
	}

	public function auth()
	{
		$session = session();
		$model = new UserModel();
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');
		$data = $model->where('email', $email)->first();
		if ($data) {
			$pass = $data['password'];
			$verifyPass = password_verify($password, $pass);
			if ($verifyPass) {
				$sessionData = [
					'id_user'	=> $data['id_user'],
					'userName'	=> $data['nama_depan'],
					'email'		=> $data['email'],
					'logged_in'	=> TRUE
				];
				$session->set($sessionData);
				return redirect()->to(base_url());
			} else {
				$session->setFlashdata('msg', 'Wrong Password');
				return redirect()->to(base_url('login'));
			}
			$session->setFlashdata('msg', 'Email not Found');
			return redirect()->to(base_url('login'));
		}
	}
}
