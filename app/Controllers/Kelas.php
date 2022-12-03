<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\PendaftaranKelasModel;
use App\Models\UserModel;

class Kelas extends BaseController
{
	public function __construct()
	{
		$this->kelasModel = new KelasModel();
		$this->pendaftaranKelasModel = new PendaftaranKelasModel();
		$this->userModel = new UserModel();
	}

	public function index()
	{
		$dataCourses = $this->kelasModel->findAll();

		function group_by($key, $data)
		{
			$result = array();
			foreach ($data as $val) {
				if (array_key_exists($key, $val)) {
					$result[$val[$key]][] = $val;
				} else {
					$result[""][] = $val;
				}
			}
			return $result;
		}
		$result = group_by("id_jenis", $dataCourses);

		$data = array(
			'title' => 'Kelas',
			'kelas' => $result,
		);

		return view('kelas', $data);
	}
}
