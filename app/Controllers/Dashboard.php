<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CoursesModel;
use \Hermawan\DataTables\DataTable;

class Dashboard extends BaseController
{
	public function __construct()
	{
		$this->coursesModel = new CoursesModel();
	}

	public function index()
	{
		return view('dashboard/index');
	}

	public function kelas()
	{
		$dataCourse = $this->coursesModel->getCourses();
		$data = array(
			'dataCourses'       => $dataCourse,
		);
		return view('dashboard/kelas', $data);
	}
}
