<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Register extends BaseController
{
	public function index()
	{
		// inlcude helper form
		helper(['form']);
		$data = [];
		return view('register', $data);
	}

	public function save()
	{
		helper(['form']);
		$rules = [
			'firstName'				=> 'required|min_length[3]|max_length[20]',
			'lastName'				=> 'required|min_length[3]|max_length[20]',
			'email'					=> 'required|min_length[6]|max_length[50]|valid_email|is_unique[tbl_user.email]',
			'password'				=> 'required|min_length[6]|max_length[200]',
			'confirmPassword'		=> 'matches[password]'
		];

		if ($this->validate($rules)) {
			$model = new UserModel();
			$data = [
				'role'			=> 'user',
				'nama_depan'	=> $this->request->getVar('firstName'),
				'nama_belakang'	=> $this->request->getVar('lastName'),
				'email'			=> $this->request->getVar('email'),
				'password'		=> password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
			];
			$model->save($data);
			return redirect()->to('/login');
		} else {
			$data['validation']	= $this->validator;
			return view('register', $data);
		}
	}
}
